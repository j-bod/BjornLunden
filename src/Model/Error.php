<?php

namespace JGI\BjornLunden\Model;

class Error
{
    /**
     * @var \DateTimeImmutable
     */
    private $timestamp;

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string|null
     */
    private $error;

    /**
     * @var string|null
     */
    private $path;

    /**
     * @param \DateTimeImmutable $timestamp
     * @param int $status
     * @param string $message
     * @param string|null $error
     * @param string|null $path
     */
    public function __construct(\DateTimeImmutable $timestamp, int $status, string $message, ?string $error, ?string $path)
    {
        $this->timestamp = $timestamp;
        $this->status = $status;
        $this->message = $message;
        $this->error = $error;
        $this->path = $path;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getTimestamp(): \DateTimeImmutable
    {
        return $this->timestamp;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * Björn Lundén returns 500(!) instead of 404.
     *
     * @return bool
     */
    public function isProbablyNotFound(): bool
    {
        return $this->getMessage() == 'Resultatdata saknas';
    }
}
