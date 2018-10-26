function displaySched(schedCode, addressUrlSchedList, addressUrlTime)
{
    console.log(addressUrlSchedList);

    arrayTime = getTime(addressUrlTime);
    arrayTime = JSON.parse(arrayTime);

    arraySchedList = getSchedList(addressUrlSchedList, schedCode);
    arraySchedList = JSON.parse(arraySchedList);

    //array sched start loop
    $.each(arraySchedList, function(index, sched) 
    {
        //split the day
        dayArray = sched['Day'].split(',');
        //checker
        //console.log("sched loop"+sched);
        //array time start loop
        $.each(arrayTime, function(index, time)
        {
            //console.log("time loop"+sched['Start_Time']+">="+time['Time_From']+"AND"+sched['End_Time']+"<="+time['Time_From']);
            //console.log("time loop"+time['Time_From']);
            if ( (time['Time_From'] >= sched['Start_Time'] ) && (time['Time_From'] <= sched['End_Time']  ) )
            {
                //console.log("display sched if");
                //array day start loop
                $.each(dayArray, function(index, day) 
                {
                    
                    if (day != '') 
                    {
                        //insert color here
                        $( "#"+time['Time_From']+"_"+day ).addClass( "SchedBorder" );
                        //console.log("#"+time['Time_From']+"_"+day);
                        //console.log(day);
                    }
                    
                });
            }
        });
        //console.log(val['Time_From']);
        
        //console.log(dayArray[0]);
        //console.log(dayArray[1]);
        
        
    });



    //console.log(arrayTime);
    //console.log(arraySchedList[0]['Day']);
    

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