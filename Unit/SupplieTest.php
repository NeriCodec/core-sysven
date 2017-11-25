<?php

namespace Tests\Unit;

use App\src\Common\Entities\SupplieEntity;
use App\src\Data\SupplieRepository;
use App\src\Service\SupplieUseCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SupplieTest extends TestCase
{
    /**
     * Prueba para registrar un proveedro en la base de datos
     *
     * @return void
     */
    public function test_registrar_un_proveedor_a_database()
    {

        $supplieUseCase = new SupplieUseCase(new SupplieRepository());


        $supplieEntity = new SupplieEntity(
            'Jasinto',
            'Lago Winnipef 401, Ciudad de México'
        );

        $success = $supplieUseCase->registerSupplie($supplieEntity);

        $this->assertEquals($success, true);
    }
}
