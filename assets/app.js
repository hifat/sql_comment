function commentList(comments) {
   $('#comment-content').html('')

   comments.map(function(comment) {
      $('#comment-content').append(`<li>${comment}</li>`)
   })
}

function loadComment() {
   var food_id = $('#food-id').val()

   $.ajax({
      url: './controller/read_comment.php',
      method: 'GET',
      data: 'food_id=' + food_id,
      dataType: 'JSON',
      success: function(res) {
         commentList(res.data)
      },
      error: function(err) {
         alert('เกิดข้อผิดพลาดในการร้องขอข้อมูล Comment')
      }
   })
}

function createComment(data) {
   $.ajax({
      url: './controller/create_comment.php',
      method: 'POST',
      data: data,
      dataType: 'JSON',
      success: function(res) {
         if ((res.result = 'success')) {
            loadComment()
         } else {
            alert('เกิดข้อผิดพลาด')
         }
      },
      error: function(err) {
         alert('เกิดข้อผิดพลาดในการร้องขอข้อมูล Comment')
      }
   })
}

$(document).ready(function() {
   loadComment()

   $('#create-comment').submit(function(e) {
      e.preventDefault()
      var data = $(this).serialize()

      createComment(data)
   })
})
