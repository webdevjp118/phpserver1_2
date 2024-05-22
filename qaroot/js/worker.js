// 0에서 99까지 루프
for(let i=0;i<100;i++){
    // 위 worker에서 onmessage이벤트를 발생!
    postMessage(i);
}
    // test변수는 없기 때문에 에러가 발생한다.
test.val = test+1;