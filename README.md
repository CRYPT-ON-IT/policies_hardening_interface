# Welcome to the HardeningKitty Interface

## Introduction

To use [HardeningKitty](https://github.com/0x6d69636b/windows_hardening) service more easily, we have created an interface which permits better understanding Windows security policies. Also, this interface allows you to generate a CSV file for the purpose of auditing or applying a configuration.

This web-interface use php, therefore, it's necessary to run it on serveur environnement like [MAMP](https://www.mamp.info/en/downloads/) or similar.

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

## CSV file

The CSV file has 26 categories including 14 from original `finding_list_0x6d69636b_machine.csv` and 12 more.

### First 14 original categories :

1. ID
2. Category
3. Name
4. Method
5. MethodArgument
6. RegistryPath
7. RegistryItem
8. ClassName
9. Namespace
10. Property
11. DefaultValue
12. RecommendedValue
13. Operator
14. Severity

### The 12 added categories :

1. **UIX impact**
  - It can be :
    - 0 : _No impact_ It has really no impact on the user interface experience.
    - 1 : _Potentially_ It can impact the UIX with no trivial manipulations like firewall.
    - 2 : _Impact_ This policy directly impact the interface like a prompt or restriction.
2. Use
  -
3. Mode
  We have 3 mode : bla, bla,bla
4. Intro
5. Link for more infos
6. Tags
7. Consequences
8. Advice
9. Notes
10. Comment
11. Possible values
12. OS
