<?php include ('../inc/header.php'); ?>
<link rel="stylesheet" href="../faq/faq.css" class="css">
<div id="idfaq">
    <div class="block-faq">
        <div class="cauhoithuonggap">CÂU HỎI THƯỜNG GẶP</div>
        <div class="form-quesition">
            <div class="quesition" onclick="toggleAnswer(1)"><p>Giới thiệu về HV Tools</p></div>
            <p class="answer" id="answer1">HV Tools chuyên cung cấp các công cụ và phần mềm tối ưu cho doanh nghiệp và cộng đồng MMO. Với các giải pháp linh hoạt và dễ sử dụng, HV Tools giúp bạn tối ưu hóa quy trình làm việc, nâng cao hiệu suất và phát triển kinh doanh hiệu quả. Chúng tôi cam kết mang đến những công cụ mạnh mẽ, hỗ trợ đắc lực trong việc quản lý, marketing và tự động hóa công việc, giúp bạn đạt được thành công nhanh chóng.</p>
            <div class="quesition" onclick="toggleAnswer(2)"><p>Tôi có thể thanh toán qua hình thức nào?</p></div>
            <p class="answer" id="answer2">
                Bạn có thể thanh toán qua các hình thức sau:<br>
                +Ví điện tử Momo<br>
                +Ví điện tử Viettel Pay<br>
                +Ngân hàng MB Bank<br>
                Tôi hỗ trợ các phương thức thanh toán tiện lợi để giúp bạn dễ dàng thực hiện giao dịch.
            </p>
            <div class="quesition" onclick="toggleAnswer(3)"><p>Mua phần mềm trên website bằng cách nào?</p></div>
            <p class="answer" id="answer3">Sau khi chọn được sản phẩm phù hợp trên website, bạn chỉ cần liên hệ cho tôi qua mục <strong style="color: yellow">Liên hệ & Thuê code</strong> để mua sản phẩm trực tiếp.</p>
            <div class="quesition" onclick="toggleAnswer(4)"><p>Có được dùng thử phần mềm trước khi mua không?</p></div>
            <p class="answer" id="answer4">Bạn hoàn toàn có thể dùng thử sản phẩm bên mình trước khi quyết định mua. Bạn sẽ được hướng dẫn kích hoạt và sử dụng phần mềm.</p>
            <div class="quesition" onclick="toggleAnswer(5)"><p>Hướng dẫn kích hoạt phần mềm</p></div>
            <p class="answer" id="answer5">Sau khi tải xuống phần mềm, hãy tiến hành giải nén và nháy đúp chuột vào phần mềm. Lúc này sẽ hiện 1 file có tên <strong style="color: yellow">'Key kích hoạt.txt'</strong>, bạn hãy bấm vào để lấy key và gửi cho tôi để tiến hành kích hoạt.</p>
            <div class="quesition" onclick="toggleAnswer(6)"><p>Làm thế nào để xử lý nếu phần mềm gặp lỗi?</p></div>
            <p class="answer" id="answer6">Khi phần mềm gặp lỗi, hãy mô tả chi tiết cho tôi bằng hình ảnh hoặc văn bản để tôi có thể fix lỗi và cập nhật cho bạn phiên bản vá lỗi.</p>
            <div class="quesition" onclick="toggleAnswer(7)"><p>Phần mềm có thể dùng trên bao nhiêu máy?</p></div>
            <p class="answer" id="answer7">Phần mềm của tôi chỉ có thể dùng <strong style="color: aqua">1 key kích hoạt</strong> / <strong style="color: aqua">1 máy duy nhất</strong>. Nếu bạn muốn dùng trên nhiều máy, hãy mua thêm key.</p>
            <div class="quesition" onclick="toggleAnswer(8)"><p>Phần mềm trên website  được bảo hành trong những trường hợp nào?</p></div>
            <p class="answer" id="answer8">Phần mềm của tôi được bảo hành tất cả các trường hợp mà bạn gặp phải! Trong trường hợp tools & phần mềm được code dựa trên các website khác, sẽ <strong style="color: red">không</strong> bảo hành nếu website bị sập.</p>
            <div class="quesition" onclick="toggleAnswer(9)"><p>Có thể đổi phần mềm từ thiết bị cũ sang thiết bị mới?</p></div>
            <p class="answer" id="answer9">Khi muốn đổi phần mềm từ thiết bị cũ sang thiết bị mới. Bạn hãy gửi cho tôi key kích hoạt của thiết bị cũ để tôi có thể hỗ trợ bạn đổi sang thiết bị mới.</p>
        </div>
    </div>
    <script>
        function toggleAnswer(id) {
            var answer = document.getElementById('answer' + id);
            if (answer.style.display === 'none' || answer.style.display === '') {
                answer.style.display = 'block';

                setTimeout(function() {
                    answer.style.opacity = 1;
                }, 400);
            } else {
                answer.style.opacity = 0;
                setTimeout(function() {
                    answer.style.display = 'none';
                }, 200);
            }
        }
    </script>
</div>
<?php include('../inc/footer.php'); ?>