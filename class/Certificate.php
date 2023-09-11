<?php

namespace class;

class Certificate {

    private int $expiresAt;
    private string $signatory;

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this,$method)) {
                $this->$method($value);
            }
        }
    }
    

   
    public function getExpiresAt(): int
    {
        return $this->expiresAt;
    }

   
    public function setExpiresAt(int $expiresAt): void
    {
        $this->expiresAt = $expiresAt;

        
    }

   
    public function getSignatory(): string
    {
        return $this->signatory;
    }

   
    public function setSignatory(string $signatory): void
    {
        $this->signatory = $signatory;
  
    }
}