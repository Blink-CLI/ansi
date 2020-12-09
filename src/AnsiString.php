<?php

namespace BlinkCLI\Ansi;

use BlinkCLI\Ansi\Exception\AnsiException;

class AnsiString
{
    protected string $string = '';

    public static function new(?string $string = null)
    {
        $new = new static;

        if ($string) {
            $new->string = $string;
        }

        return $new;
    }

    /***************************************************************************
     * Colors
     **************************************************************************/

    public function background(string $name, bool $bright = false)
    {
        $this->validateColor($name);

        $color = 'BACKGROUND_' . (($bright) ? 'BRIGHT_' : '');
        $color .= strtoupper($name);

        $clone = clone $this;
        $clone->string .= Ansi::${$color};
        return $clone;
    }

    public function color(string $name, bool $bright = false)
    {
        $this->validateColor($name);

        $color = 'FOREGROUND_' . (($bright) ? 'BRIGHT_' : '');
        $color .= strtoupper($name);

        $clone = clone $this;
        $clone->string .= Ansi::${$color};
        return $clone;
    }

    /***************************************************************************
     * Font Effects
     **************************************************************************/

    public function bold(?string $text = null)
    {
        $clone = clone $this;

        if ($text != null) {
            $clone->string .= Ansi::$BOLD . $text . Ansi::$RESET_INTENSITY;
            return $clone;
        }

        $clone->string .= Ansi::$BOLD;
        return $clone;
    }

    public function italic(?string $text = null)
    {
        $clone = clone $this;

        if ($text != null) {
            $clone->string .= Ansi::$ITALIC . $text . Ansi::$RESET_INTENSITY;
            return $clone;
        }

        $clone->string .= Ansi::$ITALIC;
        return $clone;
    }

    public function underline(?string $text = null)
    {
        $clone = clone $this;

        if ($text != null) {
            $clone->string .= Ansi::$UNDERLINE . $text . Ansi::$RESET_UNDERLINE;
            return $clone;
        }

        $clone->string .= Ansi::$UNDERLINE;
        return $clone;
    }

    /***************************************************************************
     * Text
     **************************************************************************/

    public function newline($times = 1)
    {
        $clone = clone $this;
        $clone->string .= str_repeat(PHP_EOL, $times);
        return $clone;
    }

    public function text(string $text)
    {
        $clone = clone $this;
        $clone->string .= $text;
        return $clone;
    }

    /***************************************************************************
     * Resets: Undo things we have done
     **************************************************************************/

    public function reset()
    {
        $clone = clone $this;
        $clone->string .= Ansi::$RESET;
        return $clone;
    }

    /***************************************************************************
     * Helpers
     **************************************************************************/

    public function __toString()
    {
        return $this->string;
    }

    protected function validateColor($name)
    {
        $exists = in_array($name, [
            'black',
            'red',
            'green',
            'yellow',
            'blue',
            'magenta',
            'cyan',
            'white',
        ]);

        if (! $exists) {
            throw new AnsiException("Unknown color {$name}!");
        }
    }
}
