<?php declare(strict_types = 1);

namespace PHPStan\Command;

interface Output
{

	public function writeFormatted(string $message): void;

	public function writeLineFormatted(string $message): void;

	public function writeRaw(string $message): void;

	public function getStyle(): OutputStyle;

}
