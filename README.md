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

1. _UIX impact_
    - It can be :
      - 0 : **No impact** It has really no impact on the user interface experience.
      - 1 : **Potentially** It can impact the UIX with no trivial manipulations like firewall.
      - 2 : **Impact** This policy directly impact the interface like a prompt or restriction.
    - On the interface :
    <img width="1115" alt="sample-uix-impact" src="https://user-images.githubusercontent.com/34421892/123649629-34250700-d82a-11eb-9a7c-92774a5e923d.png">

2. _Use_
    - It must be a binary value (0/1) to define which policy to check by default.

3. _Mode_
    - We have 3 mode :
      - **Basic**
      - **Enterprise**
      - **StrongBox**

4. _Intro_
    - Introduction must be description of policy.
    
    > It must be taken from a reliable source.

    > If this category is not written, the interface will consider that this policy is not complete.
  

5. _Link for more infos_ 
    - This is the link of introduction content.

6. _Tags_ 
    - Tags 


7. _Consequences_

8. _Advice_

9. _Notes_

10. _Comment_

11. _Possible values_

12. _OS_
