document.addEventListener("DOMContentLoaded", () => {
    // Event listener untuk item dan jumlah
    document.getElementById("item").addEventListener("change", updateHarga);
    document.getElementById("jumlah").addEventListener("input", hitungTotal);

    // Inisialisasi harga awal
    updateHarga();
});

function updateHarga() {
    const itemSelect = document.getElementById("item");
    const selectedItem = itemSelect.options[itemSelect.selectedIndex];
    const harga = parseInt(selectedItem.getAttribute("data-price")) || 0;
    document.getElementById("harga").value = harga;
    hitungTotal();
}

function hitungTotal() {
    const jumlah = parseInt(document.getElementById("jumlah").value) || 1;
    const harga = parseInt(document.getElementById("harga").value) || 0;
    const total = jumlah * harga;
    document.getElementById("total").value = total;
}

function submitOrder(event) {
    event.preventDefault();

    // Ambil data dari form
    const itemSelect = document.getElementById("item");
    const item = itemSelect.options[itemSelect.selectedIndex].text.split(" - ")[0];
    const jumlah = document.getElementById("jumlah").value;
    const harga = document.getElementById("harga").value;
    const total = document.getElementById("total").value;

    // Redirect ke laporan.html dengan query parameters
    window.location.href = `laporan.html?item=${encodeURIComponent(item)}&jumlah=${jumlah}&harga=${harga}&total=${total}`;
}
