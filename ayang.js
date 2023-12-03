// Silakan ganti [Nama Pasangan] dan [Nama Anda] sesuai keinginan Anda

document.addEventListener("DOMContentLoaded", function () {
  const partnerName = "Nama Pasangan";
  const yourName = "Nama Anda";

  const partnerNameElement = document.querySelector(".card p:nth-child(3)");
  const yourNameElement = document.querySelector(".card p:last-child");

  partnerNameElement.textContent = `Dear ${partnerName},`;
  yourNameElement.textContent = yourName;
});
