<?php

namespace Anonyzm\CadencePhp\Models\Domain;

class DescribeDomainResponse
{
    private Domain $domain;

    /**
     * @return Domain
     */
    public function getDomain(): Domain
    {
        return $this->domain;
    }

    /**
     * @param Domain $domain
     */
    public function setDomain(Domain $domain): void
    {
        $this->domain = $domain;
    }
}