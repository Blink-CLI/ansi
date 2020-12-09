<?php

namespace BlinkCLI\Ansi;

class Ansi
{
    public static $RESET                      = "\e[0m";
    public static $BOLD                       = "\e[1m";
    public static $FAINT                      = "\e[2m";
    public static $ITALIC                     = "\e[3m";
    public static $UNDERLINE                  = "\e[4m";
    public static $BLINK_SLOW                 = "\e[5m";
    public static $BLINK_RAPID                = "\e[6m";
    public static $INVERT                     = "\e[7m";
    public static $HIDE                       = "\e[8m";
    public static $STRIKE                     = "\e[9m";
    public static $FONT_DEFAULT               = "\e[10m";
    public static $FONT_ALT_1                 = "\e[11m";
    public static $FONT_ALT_2                 = "\e[12m";
    public static $FONT_ALT_3                 = "\e[13m";
    public static $FONT_ALT_4                 = "\e[14m";
    public static $FONT_ALT_5                 = "\e[15m";
    public static $FONT_ALT_6                 = "\e[16m";
    public static $FONT_ALT_7                 = "\e[17m";
    public static $FONT_ALT_8                 = "\e[18m";
    public static $FONT_ALT_9                 = "\e[19m";
    public static $FRAKTUR                    = "\e[20m";
    public static $DOUBLE_UNDERLINE           = "\e[21m";
    public static $RESET_INTENSITY            = "\e[22m";
    public static $RESET_ITALICS              = "\e[23m";
    public static $RESET_UNDERLINE            = "\e[24m";
    public static $RESET_BLINK                = "\e[25m";
    public static $PROPORTIONAL_SPACING       = "\e[26m";
    public static $RESET_INVERT               = "\e[27m";
    public static $RESET_HIDE                 = "\e[28m";
    public static $RESET_STRIKE               = "\e[29m";
    public static $FOREGROUND_BLACK           = "\e[30m";
    public static $FOREGROUND_RED             = "\e[31m";
    public static $FOREGROUND_GREEN           = "\e[32m";
    public static $FOREGROUND_YELLOW          = "\e[33m";
    public static $FOREGROUND_BLUE            = "\e[34m";
    public static $FOREGROUND_MAGENTA         = "\e[35m";
    public static $FOREGROUND_CYAN            = "\e[36m";
    public static $FOREGROUND_WHITE           = "\e[37m";

    /**
     * Next arguments are "5;n" or "2;r;g;b"
     */
    public static $SET_FOREGROUND_COLOR       = "\e[38m";

    public static $RESET_FOREGROUND           = "\e[39m";
    public static $BACKGROUND_BLACK           = "\e[40m";
    public static $BACKGROUND_RED             = "\e[41m";
    public static $BACKGROUND_GREEN           = "\e[42m";
    public static $BACKGROUND_YELLOW          = "\e[43m";
    public static $BACKGROUND_BLUE            = "\e[44m";
    public static $BACKGROUND_MAGENTA         = "\e[45m";
    public static $BACKGROUND_CYAN            = "\e[46m";
    public static $BACKGROUND_WHITE           = "\e[47m";

    /**
     * Next arguments are "5;n" or "2;r;g;b"
     */
    public static $SET_BACKGROUND_COLOR       = "\e[48m";
    
    public static $RESET_BACKGROUND           = "\e[49m";
    public static $RESET_PROPORTIONAL_SPACING = "\e[50m";
    public static $FRAMED                     = "\e[51m";
    public static $ENCIRCLED                  = "\e[52m";
    public static $OVERLINED                  = "\e[53m";
    public static $RESET_FRAMED_AND_ENCIRCLED = "\e[54m";
    public static $RESET_OVERLINED            = "\e[55m";

    /**
     * Next arguments are "5;n" or "2;r;g;b"
     */
    public static $SET_UNDERLINE_COLOR        = "\e[58m";
    public static $RESET_UNDERLINE_COLOR      = "\e[59m";

    public static $IDEOGRAM_UNDERLINE         = "\e[60m";
    public static $IDEOGRAM_DOUBLE_UNDERLINE  = "\e[61m";
    public static $IDEOGRAM_OVERLINE          = "\e[62m";
    public static $IDEOGRAM_DOUBLE_OVERLINE   = "\e[63m";
    public static $IDEOGRAM_STRESS_MARKING    = "\e[64";
    public static $RESET_IDEOGRAM             = "\e[65";

    public static $SUPERSCRIPT                = "\e[73";
    public static $SUBSCRIPT                  = "\e[74";

    public static $FOREGROUND_BRIGHT_BLACK    = "\e[90m";
    public static $FOREGROUND_BRIGHT_RED      = "\e[91m";
    public static $FOREGROUND_BRIGHT_GREEN    = "\e[92m";
    public static $FOREGROUND_BRIGHT_YELLOW   = "\e[93m";
    public static $FOREGROUND_BRIGHT_BLUE     = "\e[94m";
    public static $FOREGROUND_BRIGHT_MAGENTA  = "\e[95m";
    public static $FOREGROUND_BRIGHT_CYAN     = "\e[96m";
    public static $FOREGROUND_BRIGHT_WHITE    = "\e[97m";
    public static $BACKGROUND_BRIGHT_BLACK    = "\e[100m";
    public static $BACKGROUND_BRIGHT_RED      = "\e[101m";
    public static $BACKGROUND_BRIGHT_GREEN    = "\e[102m";
    public static $BACKGROUND_BRIGHT_YELLOW   = "\e[103m";
    public static $BACKGROUND_BRIGHT_BLUE     = "\e[104m";
    public static $BACKGROUND_BRIGHT_MAGENTA  = "\e[105m";
    public static $BACKGROUND_BRIGHT_CYAN     = "\e[106m";
    public static $BACKGROUND_BRIGHT_WHITE    = "\e[107m";
}
