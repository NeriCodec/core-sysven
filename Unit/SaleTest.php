<?php

namespace Tests\Unit;

use App\src\Common\Entities\SaleEntity;
use App\src\Data\SaleRepository;
use App\src\Service\SaleRepositoryCommand;
use App\src\Service\SaleUseCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SaleTest extends TestCase
{
    /**
     * Prueba para generar una venta
     *
     * @return void
     */
    public function test_para_generar_una_venta()
    {
        $saleUseCase = new SaleUseCase(new SaleRepository());

        $entity = new SaleEntity(
            3,
            200,
            'exito en la compra',
            1
        );

        $success = $saleUseCase->generateSale($entity);

        $this->assertTrue($success, true);
    }
}
