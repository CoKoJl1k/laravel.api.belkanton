<?php

namespace App\Console\Commands;

use App\Models\Product;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Throwable;


class GetProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get products from API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Get products from API
     *
     * @param string $api_url
     * @return void
     */

    public function handle(string $api_url = ""): void
    {
        try {
            $arrResponse = $this->getProductsFromApi($api_url);
            $totalRows = Product::count();
            if (empty($api_url)) {
                $totalPages = round(($arrResponse['meta']['total'] /*- 24500*/) / 100);
                // $totalPages = round(($responseArray['meta']['total'])/100);
                $this->output->progressStart($totalPages);
            }

            if ($arrResponse['meta']['total'] /*- 24500*/ > $totalRows) {

                foreach ($arrResponse['data'] as $arrProduct) {
                    if (Product::find($arrProduct['id'])) {
                        continue;
                    }
                    $this->insertProducts($arrProduct);
                }
                Log::info($arrResponse['links']['next']);

                if (!empty($arrResponse['links']['next'])) {
                    sleep(1);
                    $this->output->progressAdvance();
                    $this->handle($arrResponse['links']['next']);
                }

            } else {
                $this->output->progressFinish();
                $this->line("Success!");
                Log::info("Success! Products inserted successful!");
            }

        } catch (Throwable $exception) {
            report($exception);
            $this->error('Error message: '.$exception->getMessage());
            $this->error('File: '.$exception->getFile());
            $this->error('Line: '.$exception->getLine());
        }

    }

    /**
     * Get products from API
     *
     * @param string $api_url
     * @return array
     */

    public function getProductsFromApi(string $api_url = ""): array
    {

        $token_api =  env('TOKEN_API');
        $api_url = $api_url ?: 'https://apidev.belkanton.com/api/products2' ;
        $header = array("Authorization: Bearer {$token_api}");
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, true);

    }

    /**
     * Insert  products into database
     *
     * @param array $arrValue
     * @return void
     */

    public function insertProducts(array $arrProduct): void
    {
        Product::create([
            'id' => $arrProduct['id'],
            'catalog_id' => $arrProduct['catalog_id'],
            'code' => $arrProduct['code'],
            'set_id' => $arrProduct['id_mini_group'],
            'vendor_code' => $arrProduct['vendor_code'],
            'name' => $arrProduct['name'],
           'measures' => serialize($arrProduct['measures']),
            'manufacturer' => $arrProduct['manufacturer'],
            'country_import' => $arrProduct['country_import'],
            'country_origin' => $arrProduct['country_origin'],
            'warranty' => $arrProduct['warranty'],
            'barcode' => $arrProduct['barcode'],
            'image' => $arrProduct['image'],
            'images' => serialize($arrProduct['images']),
            'properties' => serialize($arrProduct['properties']),
            'prices' => serialize($arrProduct['prices']),
            'quantity' => $arrProduct['quantity'],
            'status' => $arrProduct['status'],
        ]);
    }
}
