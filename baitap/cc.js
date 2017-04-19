/**
 * Created by minh on 17/04/17.
 */
/**
 * Created by minh on 17/04/17.
 */
function kiem_tra_snt(n)
{
    // Biến cờ hiệu
    var flag = true;

    // Nếu n bé hơn 2 tức là không phải số nguyên tố
    if (n < 2){
        flag = false;
    }
    else{
        // lặp từ 2 tới n-1
        for (var i = 2; i < n-1; i++)
        {
            if (n % i == 0){
                flag = false;
                break;
            }
        }
    }

    // Kiểm tra biến flag
    let a=[];
    if (flag == true){
    console.log(n + " là số nguyên tố ");
    }
    else{
        console.log(n + " không phải là số nguyên tố ");
    }
}
kiem_tra_snt(2)