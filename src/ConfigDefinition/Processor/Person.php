<?php
declare(strict_types=1);


namespace CVTrust\EdiEngine\ConfigDefinition\Processor;

interface Person
{
    /**
     * @return bool
     */
    public function hasCobra(): bool;

    /**
     * @return bool
     */
    public function hasMedicare(): bool;

    /**
     * @return bool
     */
    public function hasMedicareA(): bool;

    /**
     * @return bool
     */
    public function hasMedicareB(): bool;

    /**
     * @return bool
     */
    public function hasMedicareAandB(): bool;

    /**
     * @return bool
     */
    public function hadMedicarePreviously(): bool;

    /**
     * @return bool
     */
    public function isInsurancePrimary(): bool;

    /**
     * @return bool
     */
    public function isInsuranceSecondary(): bool;
}
