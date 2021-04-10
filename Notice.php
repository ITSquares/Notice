<?

$writer = "송기호";
$title = "[공지사항] 공지사항 타이틀";
$date = "2021.04.01";
$watch = 99;
$goodCount = 10;

?>

<body>
    <table border="1">
        <tr>
            <th colspan="2">제목</th>
            <th>작성자</th>
            <th>작성일</th>
            <th>조회수</th>
            <th>좋아요</th>
        </tr>
        <tr>
            <td>공지</td>
            <td><? echo "$title"; ?></td>
            <td><? echo "$writer"; ?></td>
            <td><? echo "$date"; ?></td>
            <td><? echo "$watch"; ?></td>
            <td><? echo "$goodCount"; ?></td>
        </tr>
        <tr>
            <td colspan="6"><button>글쓰기</button></td>
        </tr>
        <tr>
            <td colspan="6"><center>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">다음▶</a>
            </center></td>
        </tr>
    </table>
</body>
