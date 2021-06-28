# Welcome to the HardeningKitty Interface

## Introduction

To use [HardeningKitty](https://github.com/0x6d69636b/windows_hardening) service more easily, we have created an interface which permits better understanding Windows security policies. Also, this interface allows you to generate a CSV file for the purpose of auditing or applying a configuration.

This web-interface use php, therefore, it's necessary to run it on serveur environnement like [MAMP](https://www.mamp.info/en/downloads/) or similar.

You can also try this interface through a [demo](https://ataumo-photo.fr/windows_hardening_interface/)

## How can i use it ?

All details about HardeningKitty is on this repository : https://github.com/0x6d69636b/windows_hardening

### How can i use HardeningKitty ?
1. Download the HardeningKitty script [here](https://github.com/0x6d69636b/windows_hardening)
2. Import the ps1 script :
```powershell
Import-Module .\Invoke-HardeningKitty.ps1
```

### How can i run HardeningKitty audit mode ?
1. Download your CSV file configuration
2. Run this command :
```powershell
Invoke-HardeningKitty -Mode Config -FileFindingList <file.csv> -Backup
```

### How can i apply a configuration ?
1. Download your CSV file configuration
2. Run this command :
```powershell
Invoke-HardeningKitty -Mode HailMary -FileFindingList <file.csv>
```

## Would you like to see more about project ?

See [this](https://github.com/ataumo/windows_hardening_interface/tree/main/interface).
