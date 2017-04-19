/**
 * Created by minh on 17/04/17.
 */
function dao(s) {
    let a='';
    for(let i=s.length-1;i>=0;i--)
        a+=s[i];
    return a;
    // return s.split('').reverse().join('');
}
console.log(dao('iort ped yanh'))