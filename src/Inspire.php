<?php
namespace Rsarker\Inspire;
use Illuminate\Support\Facades\Http;

class Inspire
{
    public function justDoIt() {

        //ss
        $response = Http::get('https://inspiration.goprogram.ai/');
        return $response['quote'] . ' -' . $response['author'];
    }

}
