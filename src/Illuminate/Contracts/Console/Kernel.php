<?php

namespace Illuminate\Contracts\Console;

interface Kernel
{
    /**
     * Bootstrap the application for artisan commands.
     *
     * @return void
     */
    public function bootstrap(): void;

    /**
     * Handle an incoming console command.
     *
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
     * @param  \Symfony\Component\Console\Output\OutputInterface|null  $output
     * @return int
     */
    public function handle(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface|null $output = null): int;

    /**
     * Run an Artisan console command by name.
     *
     * @param  string  $command
     * @param  array  $parameters
     * @param  \Symfony\Component\Console\Output\OutputInterface|null  $outputBuffer
     * @return int
     */
    public function call(string $command, array $parameters = [], \Symfony\Component\Console\Output\OutputInterface|null $outputBuffer = null): int;

    /**
     * Queue an Artisan console command by name.
     *
     * @param  string  $command
     * @param  array  $parameters
     * @return \Illuminate\Foundation\Bus\PendingDispatch
     */
    public function queue(string $command, array $parameters = []): \Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * Get all of the commands registered with the console.
     *
     * @return array
     */
    public function all(): array;

    /**
     * Get the output for the last run command.
     *
     * @return string
     */
    public function output(): string;

    /**
     * Terminate the application.
     *
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
     * @param  int  $status
     * @return void
     */
    public function terminate(\Symfony\Component\Console\Input\InputInterface $input, int $status): void;
}
