<?php

namespace Tests\Unit;

use App\src\Common\Entities\ProductInputSupplieEntity;
use App\src\Data\ProductInputSupplieRepository;
use App\src\Service\ProductInputSupplieUseCase;
use Tests\TestCase;

class ProductInputSupplieTest extends TestCase
{
    /**
     * Prueba para registrar un insumo del proveedor
     *
     * @return void
     */
    public function test_para_registrar_un_insumodeProveedor()
    {
        $productInputSupplieUseCase = new ProductInputSupplieUseCase(new ProductInputSupplieRepository());

        $productInputSupplieEntity = new ProductInputSupplieEntity(
            'Bote de helado',
            350,
            2,
            'onzas',
            1

        );

        $success = $productInputSupplieUseCase->registerProductInputSupplie($productInputSupplieEntity);

        $this->assertTrue($success, true);
    }
}
