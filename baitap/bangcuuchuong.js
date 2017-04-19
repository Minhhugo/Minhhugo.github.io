/**
 * Created by minh on 19/04/17.
 */
function bangcuuchuong(){
    console.log('        '+ "In bang cuu chuong ")
    var temp = '';
    for(let i = 1; i<=10 ; i++)
    {
        temp +='   '+ i;
    }
     console.log('  ' + temp + '')

    for(let i=1;i<=10;i++)
    {
        let dem = i;
        let tam = '';
        for(let j =1; j<=10 ;j++)
        {
            if((j>=1) && (j<10) && (dem*j)<10 )
            {
               tam +=  ' '+dem*j+'  ';
            }
              else{
                tam +=  ' '+dem*j+' ';
            }
        }
        if(i<=9){
            console.log(' '+i +' '+'|' +tam +' |');
        }
        else {
            console.log(' ' + i + '|' + tam + '|');
        }

    }

}
bangcuuchuong()