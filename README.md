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
    - **Format** :
      - 0 : **No impact** It has really no impact on the user interface experience.
      - 1 : **Potentially** It can impact the UIX with no trivial manipulations like firewall.
      - 2 : **Impact** This policy directly impact the interface like a prompt or restriction.

2. _Use_
    - It define which policy is checked by default.
    - **Format** : Binary

3. _Mode_
    - **Format** :
      - **Basic**
      - **Enterprise**
      - **StrongBox**

4. _Intro_
    - Introduction must be description of policy.
    - **Format** : String
        > It must be taken from a reliable source.
        > If this category is not written, the interface will consider that this policy is not complete.
        > In this category, you can use `->` to create `<ul>` list and `\n` to write `<br>` on the interface.
    - **Example** : 
     ```
     Allow Windows Ink Workspace 
     ->If this policy is enabled, you can Share your ideas or draw on screenshots with your pen in the Windows Ink Workspace.
     ``` 


5. _Link for more infos_ 
    - This is the link of introduction content.
    - **Format** : String

6. _Tags_ 
    - Tags can be useful for a reseach or to do a filter. 
    - **Format** : List (Strings joint with ';').
    - **Example** : Tags for "SMBv1 Support" policy are :
        - `Network;Share;SMB`

7. _Consequences_
    - This category describes the potential consequences of the policy after its implementation.
    - **Format** : `String`
    - **Example** : On "Interactive logon: Do not require CTRL+ALT+DEL" (1302) you have this consequence :
        - `Unless they use a smart card to log on, users must simultaneously press the three keys before the logon dialog box is displayed.`

8. _Advice_
    - **Format** : `String`
    - **Example** : 
        - `It is advisable to set Account lockout duration to approximately 15 minutes. To specify that the account will never be locked out, set the Account lockout threshold value to 0.`

9. _Notes_
    - Somes complementary informations about policies.
        > In this category, you can use `->` to create `<ul>` list and `\n` to write `<br>` on the interface.

10. _Comment_
    - Your constructive subjective remark.
        > In this category, you can use `->` to create `<ul>` list and `\n` to write `<br>` on the interface.
    - **Format** : `String`
    - **Exemple**

11. _Possible values_
    - All possibles values that can be configured in this policy.
    - **Format** : Couple (Type, separeted by ':' Type:List (Strings joint with ';'). 
    - **Exemple** : 
        - `String : Enable;Disable;Not defined`
        - `Number : (1 to 99 999) (Enable - minutes);(0) Disable`  
        - `Number : (1)Enable;(0)Disable`
        - `List : User-defined list of accounts`
        - `Boolean : True;False`

12. _OS_
    - All OS that are compatible with this policy.
    - **Format** : List. Like :
        - `Windows 10; Windows Server 2019`
        - `At least Windows 7`


