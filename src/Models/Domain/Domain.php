<?php

namespace Anonyzm\CadencePhp\Models\Domain;

class Domain
{
    private string $id;
    private string $name;
    private string $status;
    private array $data = [];
    private string $workflowExecutionRetentionPeriod;
    private array $badBinaries = [];
    private string $historyArchivalStatus;
    private string $historyArchivalUri;
    private string $visibilityArchivalStatus;
    private string $visibilityArchivalUri;
    private string $activeClusterName;
    private array $clusters = [];
    private bool $isGlobalDomain;
    private array $isolationGroups = [];

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getWorkflowExecutionRetentionPeriod(): string
    {
        return $this->workflowExecutionRetentionPeriod;
    }

    /**
     * @param string $workflowExecutionRetentionPeriod
     */
    public function setWorkflowExecutionRetentionPeriod(string $workflowExecutionRetentionPeriod): void
    {
        $this->workflowExecutionRetentionPeriod = $workflowExecutionRetentionPeriod;
    }

    /**
     * @return array
     */
    public function getBadBinaries(): array
    {
        return $this->badBinaries;
    }

    /**
     * @param array $badBinaries
     */
    public function setBadBinaries(array $badBinaries): void
    {
        $this->badBinaries = $badBinaries;
    }

    /**
     * @return string
     */
    public function getHistoryArchivalStatus(): string
    {
        return $this->historyArchivalStatus;
    }

    /**
     * @param string $historyArchivalStatus
     */
    public function setHistoryArchivalStatus(string $historyArchivalStatus): void
    {
        $this->historyArchivalStatus = $historyArchivalStatus;
    }

    /**
     * @return string
     */
    public function getHistoryArchivalUri(): string
    {
        return $this->historyArchivalUri;
    }

    /**
     * @param string $historyArchivalUri
     */
    public function setHistoryArchivalUri(string $historyArchivalUri): void
    {
        $this->historyArchivalUri = $historyArchivalUri;
    }

    /**
     * @return string
     */
    public function getVisibilityArchivalStatus(): string
    {
        return $this->visibilityArchivalStatus;
    }

    /**
     * @param string $visibilityArchivalStatus
     */
    public function setVisibilityArchivalStatus(string $visibilityArchivalStatus): void
    {
        $this->visibilityArchivalStatus = $visibilityArchivalStatus;
    }

    /**
     * @return string
     */
    public function getVisibilityArchivalUri(): string
    {
        return $this->visibilityArchivalUri;
    }

    /**
     * @param string $visibilityArchivalUri
     */
    public function setVisibilityArchivalUri(string $visibilityArchivalUri): void
    {
        $this->visibilityArchivalUri = $visibilityArchivalUri;
    }

    /**
     * @return string
     */
    public function getActiveClusterName(): string
    {
        return $this->activeClusterName;
    }

    /**
     * @param string $activeClusterName
     */
    public function setActiveClusterName(string $activeClusterName): void
    {
        $this->activeClusterName = $activeClusterName;
    }

    /**
     * @return array
     */
    public function getClusters(): array
    {
        return $this->clusters;
    }

    /**
     * @param array $clusters
     */
    public function setClusters(array $clusters): void
    {
        $this->clusters = $clusters;
    }

    /**
     * @return bool
     */
    public function isGlobalDomain(): bool
    {
        return $this->isGlobalDomain;
    }

    /**
     * @param bool $isGlobalDomain
     */
    public function setIsGlobalDomain(bool $isGlobalDomain): void
    {
        $this->isGlobalDomain = $isGlobalDomain;
    }

    /**
     * @return array
     */
    public function getIsolationGroups(): array
    {
        return $this->isolationGroups;
    }

    /**
     * @param array $isolationGroups
     */
    public function setIsolationGroups(array $isolationGroups): void
    {
        $this->isolationGroups = $isolationGroups;
    }
}