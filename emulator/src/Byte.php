<?php

namespace Danepowell\dp6502;

/**
 * Byte (8-bit) data type.
 */
class Byte extends Bits {
  protected function length(): int {
    return 8;
  }
}
