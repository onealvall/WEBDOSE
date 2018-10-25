function displaySched(schedCode, addressUrlSchedList, addressUrlTime)
{
    console.log(addressUrlSchedList);

    arrayTime = getTime(addressUrlTime);
    arrayTime = JSON.parse(arrayTime);

    arraySchedList = getSchedList(addressUrlSchedList, schedCode);
    arraySchedList = JSON.parse(arraySchedList);

    $.each(arraySchedList, function(index, val) 
    {
        //console.log(val['Time_From']);
        dayArray = val['Day'].split(',');
        console.log(dayArray[0]);
        console.log(dayArray[1]);
        if(dayArray.isArray)
        {
            alert('true');
        }
        else
        {
            alert('false');
        }
    });



    //console.log(arrayTime);
    console.log(arraySchedList[0]['Day']);
    

    //alert(arraySchedList);
}

function getSchedList(addressUrlSchedList, schedCode)
{
    //var arrayTime;
    ajax = $.ajax({
        async: false,
        url: addressUrlSchedList,
        type: 'GET',
        data: {schedId: schedCode},
        success: function(response){
            //alert(response);
            arraySchedList = response;
        }
    });
    
    return arraySchedList;
    //alert(arraySchedList);

    
    
   
}

function getTime(addressUrlTime)
{
    //var arrayTime;
    $.ajax({
        async: false,
        url: addressUrlTime,
        type: 'GET',
        data: {check: 1},
        success: function(response){
            //alert(response);
            arrayTime = response;
        }
    });
   
    return arrayTime;
    //alert(arrayTime);

    /*
    $.each(arrayTime, function(index, val) {
        console.log(val['Time_From']);
    });
    */
    
   
}