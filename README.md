![Work in progress label](https://img.shields.io/badge/-Work%20in%20progress-yellow)
[![PHP Linting](https://github.com/ataumo/windows_hardening_interface/actions/workflows/phplint.yml/badge.svg)](https://github.com/ataumo/windows_hardening_interface/actions/workflows/phplint.yml)
[![Deploy website](https://github.com/ataumo/policies_hardening_interface/actions/workflows/ftp-deploy.yml/badge.svg)](https://github.com/ataumo/policies_hardening_interface/actions/workflows/ftp-deploy.yml)

# Welcome to the Hardening Interface

## Introduction

To use [HardeningKitty](https://github.com/0x6d69636b/windows_hardening) service more easily, we have created an interface which permits better understanding of Windows security policies. Also, this interface allows you to generate a CSV file for the purpose of auditing or applying a configuration.

Moreover, it works on macOS with [Tethys](https://github.com/ataumo/macos_hardening) based on HardeningKitty.

This web-interface use php, therefore, it's necessary to run it on serveur environnement like [MAMP](https://www.mamp.info/en/downloads/) or similar.

You can also try this interface through a [demo](https://ataumo-photo.fr/policies_hardening_interface/).

## How can I use it ?

### On windows

All details about HardeningKitty is on this repository : https://github.com/0x6d69636b/windows_hardening

#### How can I use HardeningKitty ?

1. Download the HardeningKitty script [here](https://github.com/0x6d69636b/windows_hardening)
2. Import the ps1 script :
```powershell
Import-Module .\Invoke-HardeningKitty.ps1
```

#### How can I run HardeningKitty audit mode ?

1. Download your CSV file configuration
2. Run this command :
```powershell
Invoke-HardeningKitty -Mode Audit -FileFindingList <file.csv>
```

#### How can I save my configuration ?

1. Download your CSV file configuration
2. Run this command :
```powershell
Invoke-HardeningKitty -Mode Config -FileFindingList <file.csv> -Backup
```

#### How can I apply a configuration ?

1. Download your CSV file configuration
2. Run this command :
```powershell
Invoke-HardeningKitty -Mode HailMary -FileFindingList <file.csv>
```

### On macOS

All details about Tethys is on this repository : https://github.com/ataumo/macos_hardening

#### How can I use Tethys ?

1. Download the HardeningKitty script [here](https://github.com/ataumo/macos_hardening)
2. Run the bash script :
```bash
./tethys.sh
```

#### How can I run Tethys audit mode ?

1. Download your CSV file configuration
2. Run this command :
```bash
./tethys.sh -a -file <file.csv>
```

#### How can I apply a configuration ?

1. Download your CSV file configuration
2. Run this command :
```bash
./tethys.sh -r -file <file.csv>
```

## Would you like to see more about this project ?

You can see [this](https://github.com/ataumo/windows_hardening_interface/tree/main/interface) to understand how the interface works.
