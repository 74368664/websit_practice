
var dele=document.getElementsByClassName('dele');
var adduser=document.getElementById('adduser');

for(let i = 0;i < dele.length;i++) {
    dele[i].onclick = function () {
        var count=0;
        count = i;
        console.log(count);
        var name=document.getElementsByClassName('name')[count].value;
        console.log(name);


        layer.open({
            type: 1 //Page层类型
            , area: ['500px', '300px']
            , title: '你好，' + name
            , shade: 0.6 //遮罩透明度
            , maxmin: true //允许全屏最小e化
            , anim: 1 //0-6的动画形式，-1不开启
            , content: '<div style="padding:50px;">' +
                '<form action="{:url(\'wutong/AdminPage/DeleteUser\')}"  method="post">确认删除:用户' +
                ' <input type="text" value="" id="username" name="username" readonly="readonly"style="border-width: 0">' +
                '<input type="submit" value="确认"></form>' +
                '</div>'
        });
        document.getElementById('username').value=name;

    }
}


// var name='{$list[1]["username"]}';
// console.log(name);

