

import filecmp
import requests
import csv
import os



####### Data #######
git_file_url = "https://raw.githubusercontent.com/0x6d69636b/windows_hardening/master/lists/finding_list_0x6d69636b_machine.csv"
git_file_downloaded_target = "finding_list_0x6d69636b_machine.csv"
out_file_target = "finding_list_machine_UIX.csv"
##### End Data #####

##### test #####
#out_file_target = "finding_list_machine_UIX_test.csv"
##### end test ####


##### functions ######
def data_to_dico(name_file_target):
    file_dico ={}
    #open in read only mode
    with open(name_file_target, 'r') as csvfile:
        csv_content = csv.reader(csvfile, delimiter=',', quotechar='"')
        for row in csv_content:
            file_dico[row[0]] = row
    return file_dico

def write_csv_file(head_csv,new_file_dico,name_string):
    #open in write only mode
    with open(name_string, 'w') as csvfile:
        csv_writer = csv.writer(csvfile, delimiter=',',quotechar='"')
        # write the data
        csv_writer.writerow(head_csv)
        for key in new_file_dico:
            csv_writer.writerow(new_file_dico[key])

def download_file(url_file,local_target_name):
    req = requests.get(url_file)
    url_content = req.content
    csv_file = open(local_target_name, 'wb')
    csv_file.write(url_content)
    csv_file.close()

def compare(new_file_dico,final_file_dico):
    diff=0
    print("\nCOMPARE...\n")
    original_tab_size = len(new_file_dico["ID"])
    final_tab_size = len(final_file_dico["ID"])
    for key in new_file_dico:
        #on agrandi le tableau
        new_file_dico[key]+['']*(final_tab_size-original_tab_size)
        #si la politique du fichier git n'est pas dans le fichier final
        if (key not in final_file_dico):
            print("    +Add : "+key+" policy in your final csv file")
            print("------------------------------------------------")
            diff+=1
        #si la politique est à l'interieur, on met à jour son contenue
        else:
            for i in range(original_tab_size):
                if new_file_dico[key][i]!=final_file_dico[key][i]:
                    print("->Update : "+new_file_dico["ID"][i]+" value of "+key+"\n          ("+final_file_dico[key][i]+" -> "+new_file_dico[key][i]+")")
                    print("------------------------------------------------")
                    diff+=1
    return diff

def fusion(new_file_dico,final_file_dico):
    print("\nFUSION...\n")
    original_tab_size = len(new_file_dico["ID"])
    final_tab_size = len(final_file_dico["ID"])
    for key in new_file_dico:
        #on agrandi le tableau
        new_file_dico[key]+['']*(final_tab_size-original_tab_size)
        #si la politique du fichier git n'est pas dans le fichier final
        if (key not in final_file_dico):
            print("   +Added : "+key+" policy in your final csv file")
            final_file_dico[key] = new_file_dico[key]
        #si la politique est à l'interieur, on met à jour son contenue
        else:
            for i in range(original_tab_size):
                if new_file_dico[key][i]!=final_file_dico[key][i]:
                    print("->Updated : "+new_file_dico["ID"][i]+" value of "+key+"\n     ("+final_file_dico[key][i]+" -> "+new_file_dico[key][i]+")")
                    final_file_dico[key][i]=new_file_dico[key][i]
    return final_file_dico
##### end function #####



# dowload new file
download_file(git_file_url,"downloaded_tmp_file.csv")

# convert data to dico
new_file_dico = data_to_dico("downloaded_tmp_file.csv")
final_file_dico = data_to_dico(out_file_target)

# compare
diff = compare(new_file_dico,final_file_dico)

if diff!=0:
    response = input("\n\nDo you want to apply this update in ? y/N\n")
    if response=='y':
        # on modifie le nom du fichier
        os.rename("downloaded_tmp_file.csv", git_file_downloaded_target)

        final_file_dico = fusion(new_file_dico,final_file_dico)
        ## remove fisrt raw
        first_raw = final_file_dico['ID']
        final_file_dico.pop('ID', None)
        final_file_dico = dict(sorted(final_file_dico.items(), key=lambda x: x[1][0]))
        write_csv_file(first_raw,final_file_dico,out_file_target)
        print("\n\nYour file",out_file_target,"has been updated !")
        print("If you edit this file through Exel or Numbers application, you have to reexport it.")
    else:
        print("Quitting...")
        exit(1)
else:
    print("You Hardening is already up to date")
