

/************ functions **************/
/* csv reader */
function CSVReader(csv_data_list) {
  var data=""
  var txtFile = new XMLHttpRequest();
   txtFile.open("GET", global_link+link_original_list, true);
   txtFile.onreadystatechange = function()
   {
        if (txtFile.readyState === 4)
        {
             // Makes sure the document is ready to parse.
             if (txtFile.status === 200)
             {
                  // Makes sure it's found the file.
                  data = txtFile.responseText
                  CSVParser(data,csv_data_list);
             }
        }
   }
   txtFile.send(null)

}

// retourne la liste du contenue des politiques pour le hardening
function CSVParser(data,csv_data_list){
  var rows_array = data.split('\n')
  for (var i = 0; i < rows_array.length; i++) {
    rows_array[i]=rows_array[i].split(',');
  }
  var new_content_csv=[];
  new_content_csv.push([rows_array[0]])
  var id;
  //pour chaque éléments
  for (var i = 0; i < csv_data_list.length; i++) {
    id = csv_data_list[i][0]//on récupère l'id

    //si l'élément à été selectionné
    if (csv_data_list[i][2]=="checked") {
      // pour les elements chargées
      for (var j = 1; j < rows_array.length; j++) {
        // si on a trouvé le bon id
        if (rows_array[j][0]==id) {
          // on modifie la valeur "RecommendedValue"
          rows_array[j][11]=csv_data_list[i][1]
          // on récupère tout le contenu
          new_content_csv.push(rows_array[j])

          break;
        }
        // sinon on fait rien
      }
    }
    // sinon on fait rien

  }
  // on convertie les données en string
  for (var i = 0; i < new_content_csv.length; i++) {
    new_content_csv[i] = new_content_csv[i].join(',')
  }
  new_content_csv=new_content_csv.join('\n')
  $('#csv-download').attr('href','data:text/csv;charset=utf8,' + encodeURIComponent(new_content_csv)).attr('download','filename.csv')
  new_content_csv=""
  rows_array=[]
  csv_data_list=[]
}


/************** End function *******************/

/************** Events *****************/
/* export csv */
//CSV structure = "ID,Category,Name,Method,MethodArgument,RegistryPath,RegistryItem,ClassName,Namespace,Property,DefaultValue,RecommendedValue,Operator,Severity"
//on initialise la liste des données
var csv_data_list=[];
$('#csv-generate').click(function(){
  $("#csv-generate-loader").css("display","inline-block")

  $(".tr-visible").each(
    function(i){
      var csv_data_string = $(this).attr("csv-data");
      if (csv_data_string) {
        csv_data_sub_list = csv_data_string.split(",");
        csv_data_list.push(csv_data_sub_list)
      }

    }
  )

  //$('#csv-export').attr('href','data:text/csv;charset=utf8,' + encodeURIComponent(data))
  //.attr('download','filename.csv')
  CSVReader(csv_data_list);
  // reset csv csv_data_list
  csv_data_list=[]
  $("#csv-generate-loader").css("display","none")
  $("#liveToast").removeClass("hide").addClass("show")

}

)

/*********************************************/
/************* checkbox event (use)  *************/

/* check event */
$('.check-policy').change(function() {
  var data = $(this).parent().parent().attr("csv-data");
  var csv_data_list = data.split(",");
  if (csv_data_list[2]=="checked") {
    csv_data_list[2]="not-checked"
  }else {
    csv_data_list[2]="checked"
  }
  data = csv_data_list.join(",")
  $(this).parent().parent().attr("csv-data",data);
});

/*********************************************/
