# Device Short URL

This [YOURLS](https://yourls.org) plugin enables the possibility to have different redirection URLs depending on the device of the visitor, by using [device detector](https://github.com/matomo-org/device-detector/) . Inspired by [YOURLS-GeoShortURL](https://github.com/tobozo/YOURLS-GeoShortURL)


## Usage

For any given short URL you need to redirect by device (e.g: http://your.ls/**blah**):
- use it to create a new short URL with the desired device suffix (e.g. for France : **blah-desktop**)
- assign it with your device-specific long URL


## How to install this plugin

1. Clone this git repo
2. move this repo dir into the  /path/to/YOURLS/user/plugins
3. Activate the plugin using your YOURLS admin panel

## device list

**desktop** 桌面浏览器
**tablet** 平板 
**smartphone** 智能手机


## depends 

[device detector](https://github.com/matomo-org/device-detector/)

[spyc](https://github.com/mustangostang/spyc)


