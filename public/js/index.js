$.ajaxSetup({
  headers: {
    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
  },
});

$("#encrypt").click(function () {
  const input = $("input#inpute").val();

  $.ajax({
    url: "/encrypt",
    method: "POST",
    data: { input: input },
    success: function (result) {
      $("p#encryptedstring").html("Encrypted String: " + result);
    },
  });
});

$("#decrypt").click(function () {
  const input = $("input#inputd").val();

  $.ajax({
    url: "/decrypt",
    method: "POST",
    data: { input: input },
    success: function (result) {
      $("p#decryptedstring").html("Decrypted String: " + result);
    },
  });
});
