# How does it work ?

## CSV file content

The CSV file `interface/data/finding_list_machine_UIX.csv` has 26 categories including 14 from original [`finding_list_0x6d69636b_machine.csv`](https://github.com/0x6d69636b/windows_hardening/blob/master/lists/finding_list_0x6d69636b_machine.csv) and 12 more.

### First 14 original categories :

1. _ID_
2. _Category_
3. _Name_
4. _Method_
5. _MethodArgument_
6. _RegistryPath_
7. _RegistryItem_
8. _ClassName_
9. _Namespace_
10. _Property_
11. _DefaultValue_
12. _RecommendedValue_
13. _Operator_
14. _Severity_

### The 12 added categories :

1. _UIX impact_
    - This important category identify the impact on **user interface experience**.
    - **Format** : `Number`
      - 0 : **No impact** It has really no impact on the user interface experience.
      - 1 : **Potentially** It can impact the UIX with no trivial manipulations like firewall.
      - 2 : **Impact** This policy directly impact the interface like a prompt or restriction.
      > It's important to overestimate this value. For example, if your are not sure, set it to `Potentially`.
    - **Example** : Tags for "SMBv1 Support" policy are :
        - `Network;Share;SMB`

2. _Use_
    - It define which policy is checked by default.
    - **Format** : `Binary`

3. _Mode_
    - **Format** : `String`
      - **Basic**
      - **Enterprise**
      - **StrongBox**

4. _Intro_
    - Introduction must be to describe the policy.
    - **Format** : `String`
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
    - **Format** : `String`

6. _Tags_
    - Tags can be useful for a reseach or to do a filter.
    - **Format** : `List` (`Strings` joint with ';').
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
    - **Example**

11. _Possible values_
    - All possibles values that can be configured in this policy.
    - **Format** : Couple (Type,List) separeted by ':' Type:List (Strings joint with ';'). It can be defined like that :
        - Interval : `Number : max-min`
        - List of values : `Number : val1;val2;val3`
        - Indication abour value : `Number : val1(String);val2(String)`
    - **Example** :
        - `String : Enable;Disable;Not defined`
        - `Number : (1 to 99 999) (Enable - minutes);(0) Disable`  
        - `Number : (1)Enable;(0)Disable`
        - `List : User-defined list of accounts`
        - `Boolean : True;False`

12. _OS_
    - All OS that are compatible with this policy.
    - **Format** : `List`
    - **Example** :
        - `Windows 10; Windows Server 2019`
        - `At least Windows 7`

## CSV File updater

Obviously, `interface/data/finding_list_machine_UIX.csv` is not updated when a new version appears on HardeningKitty repository. But, if it's just a concatenation of `finding_list_0x6d69636b_machine.csv` and 12 more categories, we can compare data.

We have implemented a refresh function in `interface/data/refresh.py` that will execute the following algorithm :

In this algorithm, we have 2 files :
- `A` : It represents `finding_list_0x6d69636b_machine.csv`
- `B` : It represents `interface/data/finding_list_machine_UIX.csv`
- `C` : It represents `interface/data/downloaded_tmp_file.csv`

```
1. Download original file from HardeningKitty repository in `C`
2. Compare `C` and `B`
3.   If `C` has new updates
4.     Print updates
5.     Prompt "Do you want to apply this update in ?"
6.     If it's "y"
7.       Refresh `B` with `C`
8.       Replace `A` with `C`
```

### Printer case

- When you have to update a value in policy, it will print this :
```
->Update : <NameOfCategory> value of <ID>
          (<OldValue> -> <NewValue>)
------------------------------------------------
```
> Be careful with this function because if you have voluntarily modified a value, it will replace it.

- And when you have to add a policy :
```
    +Add : <ID> policy in your final csv file
------------------------------------------------
```

### Example

```
windows_hardening_interface/interface/data % python refresh.py

COMPARE...

->Update : RecommendedValue value of 1100
          (15 -> 10)
------------------------------------------------
->Update : Name value of 1607
          (Device Installation Restrictions: Prevent installation of devices that match an ID -> Device Installation: Device Installation Restrictions: Prevent installation of devices that match an ID)
------------------------------------------------
->Update : Name value of 1608
          (Device Installation Restrictions: Prevent installation of devices that match an ID (Retroactive) -> Device Installation: Device Installation Restrictions: Prevent installation of devices that match an ID (Retroactive))
------------------------------------------------
->Update : Name value of 1609
          (Device Installation Restrictions: Prevent installation of devices that match ID PCI\CC_0C0010 (Firewire) -> Device Installation: Device Installation Restrictions: Prevent installation of devices that match ID PCI\CC_0C0010 (Firewire))
------------------------------------------------
->Update : Name value of 1610
          (Device Installation Restrictions: Prevent installation of devices that match ID PCI\CC_0C0A (Thunderbolt) -> Device Installation: Device Installation Restrictions: Prevent installation of devices that match ID PCI\CC_0C0A (Thunderbolt))
------------------------------------------------
->Update : Name value of 1611
          (Device Installation Restrictions: Prevent installation of devices using drivers that match an device setup class -> Device Installation: Device Installation Restrictions: Prevent installation of devices using drivers that match an device setup class)
------------------------------------------------
->Update : Name value of 1612
          (Device Installation Restrictions: Prevent installation of devices using drivers that match an device setup class (Retroactive) -> Device Installation: Device Installation Restrictions: Prevent installation of devices using drivers that match an device setup class (Retroactive))
------------------------------------------------
->Update : Name value of 1613
          (Device Installation Restrictions: Prevent installation of devices using drivers that match d48179be-ec20-11d1-b6b8-00c04fa372a7 (SBP-2 drive) -> Device Installation: Device Installation Restrictions: Prevent installation of devices using drivers that match d48179be-ec20-11d1-b6b8-00c04fa372a7 (SBP-2 drive))
------------------------------------------------
    +Add : 1763 policy in your final csv file
------------------------------------------------
->Update : RecommendedValue value of 1745
          (0 -> 3)
------------------------------------------------


Do you want to apply this update in ? y/N
```

## CSV file generator
The advantages of this interface are the ability to modify your configuration and generate the CSV file to use HardeningKitty.
To download your configuration, you have 2 buttons :
- `Generate CSV File` that will write CSV data in `href` of `Download CSV file` button
- And `Download CSV File` that will download the CSV file (obviously...).

The generator function implemented in `interface/script/generate_csv.js` can be separated in 2 parts :
1. Getting data from interface like `RecommendedValue` and `Check` state (that will called `CheckState`)
2. Getting data from original CSV file configuration to just select only all checked policies and replace its `RecommendedValue`

> In `csv-data` attribute we have this content : csv-data="_ID_,_RecommendedValue_,_CheckState_"

```
1. On click on `Generate CSV File` button
2. We define a list called `csv-data-list`

// Getting data from interface
3. For each row in table identified by `.tr-visible` class
4.    Create sub list with `csv-data` attribute content (separated by `,`)
5.    Add this sub list in other list called `csv-data-list`

// Getting data from original csv file
6. Read `/data/finding_list_0x6d69636b_machine.csv`
7. For each sub list in `csv-data-list`
8.    We get the policy ID from the first element of sublist
9.    If the third element of sublist is 'checked'
10.        For each row in `/data/finding_list_0x6d69636b_machine.csv`
11.           If sublist ID and row ID are equals
12.               We replace RecommendedValue of file with our RecommendedValue from csv-data
```

## Classes

## Table structure

To make a working toggle,

```html
<tr id="data-1000" class="tr-visible content-1000 row-content" csv-data="1000,Disabled,checked" data-tags="Network;Share;SMB" active-filter-uix="false" active-filter-severity="false">
  ...
</tr>
<tr class="content-1000"></tr>
<!---- Toggle content ---->
<tr class="content-1000">
  ...
</tr>
<!---- End toggle content ---->
```

### Attributes

- _id_ : `data-ID`
- _class_ :
  - `tr-visible`
  - `content-ID`
  - `row-content`
- _csv-data_ : `ID,RecommendedValue,CheckState`
- _data-tags_ : `tag1;tag2;...`
- _active-filter-uix_ :
- _active-filter-severity_ : 
