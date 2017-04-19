console.time('time')
function kiemtra(n) {
    if(n < 2 ){
        return 0
    }
    else  {
        for(let i = 2 ; i < n - 1; i++)
        {
            if (n % i == 0){
                return 0;
            }
        }
    }
    return 1

}
let vs = function(n) {
        let temp = '2 ';
        for(let i = 3; i <= n; i+=1){
            if(kiemtra(i)){
                temp += i + ' ';
            }
        }
    console.log(" cac so nguyen to den " + ` ${n}`  )
    console.log(temp)

    }
vs(100)
console.timeEnd('time')