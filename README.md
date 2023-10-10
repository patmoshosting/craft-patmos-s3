<p align="center"><img src="./src/icon.svg" width="100" height="100" alt="Amazon S3 for Craft CMS icon"></p>

<h1 align="center">Patmos S3 for Craft CMS</h1>

This plugin provides a [Patmos S3](https://aws.amazon.com/s3/) integration for [Craft CMS](https://craftcms.com/) that is based off the aws-s3 default plugin for craft.

## Requirements

This plugin requires Craft CMS 4.0 or later.

## Installation

You can install this plugin from the Plugin Store or with Composer.

#### From the Plugin Store

Go to the Plugin Store in your project’s Control Panel and search for “Patmos S3”. Then press **Install** in its modal window.

#### With Composer

Open your terminal and run the following commands:

```bash
# go to the project directory
cd /path/to/my-project.test

# tell Composer to load the plugin
composer require patmos/craft-patmos-s3

# tell Craft to install the plugin
./craft plugin/install acraft-patmos-s3
```

## Setup

To create a new Patmos S3 filesystem to use with your volumes, visit **Settings** → **Filesystems**, and press **New filesystem**. Select “Patmos S3” for the **Filesystem Type** setting and configure as needed.

> 💡 The Base URL, Access Key ID, Secret Access Key, Bucket, Region, Subfolder, CloudFront Distribution ID, and CloudFront Path Prefix settings can be set to environment variables. See [Environmental Configuration](https://craftcms.com/docs/4.x/config/#environmental-configuration) in the Craft docs to learn more about that.

### Using automatic focal point detection

This plugin can use the [Aws Rekognition](https://aws.amazon.com/rekognition/) service to detect faces in an image and automatically set the focal point accordingly. This requires the image to be either a jpg or a png file. You can enable this feature via **Attempt to set the focal point automatically?** in the filesystem settings.

> ⚠️ ️Using this will incur extra cost for each upload, and requires the <code>rekognition:DetectFaces</code> action to be allowed.
