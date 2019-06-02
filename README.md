# Hectopress

![](https://raw.githubusercontent.com/hectogonstudio/hectopress-theme/master/screenshot.png)

Hectopress is a WordPress starter project using Composer. Clone this repository locally and then create a `.env` file with the following contents, inserting license key information if using [ACF Pro](https://www.advancedcustomfields.com/pro/ "ACF Pro") and/or [Gravity Forms](https://www.gravityforms.com/ "Gravity Forms"):

```
PLUGIN_ACF_KEY=[Insert ACF Pro dev key]
PLUGIN_GRAVITY=[Insert Gravity forms key]
```

After this, run `composer install` to install WordPress and the specified plugins to `./build`. You'll also get a copy our [Hectopress Theme](https://github.com/hectogonstudio/hectopress-theme "Hectopress Starter Theme") as part of the process which is based on [Underscores](https://underscores.me/ "Underscores") and ready for you to build a custom theme from.