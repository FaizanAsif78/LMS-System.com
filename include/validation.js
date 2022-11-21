    function num(element){
          var nmbr = element.value;
          nmbr = nmbr.replace(/[^0-9-:]*$/,"");
          if(nmbr){
              element.value = nmbr;
          }else{

          }
          element.value = nmbr;
      }

      function num2(element){
        var nmbr2 = element.value;
        nmbr2 = nmbr2.replace(/[^0-9-%]*$/,"");
        if(nmbr2){
            element.value = nmbr2;
        }else{

        }
        element.value = nmbr2;
    }

    function pass(element){
        var ps = element.value;
        ps = ps.replace(/[^A-Za-z0-9_@.)]*$/,"");
        if(ps){
            element.value = ps;
        }else{

        }
        element.value = ps;
    }

    function alp(element){
        var name = element.value;
        name = name.replace(/[^A-Za-z]*$/,"");
        if(name){
            element.value = name;
        }else{

        }
        element.value = name;
    }

    function eml(element){
        var name2 = element.value;
        name2 = name2.replace(/[^a-z_@0-9]*$/,"");
        if(name2){
            element.value = name2;
        }else{

        }
        element.value = name2;
    }