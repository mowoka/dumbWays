import collections

items = {
    "KD0023": [
        "Laptop Asus ROG",
        15000000,
    ],

    "C42212": [
        "Iphone 12",
        12000000,
    ],
    
    "D90312": [
        "Xiaomi Pocophone",
        7000000,
    ],

    "HI2020": [
        "Playstation 5",
        15000000,
    ],
}

def checkout(kode_barang, diskon):
    products = kode_barang
    list_barang = []
    nama_barang = []
    harga = []
    kode_product = {}

    for i in products:
        if i in items:
            list_barang.append(items[i])

    # print(list_barang)
    
    for barang in list_barang:
        nama_barang.append(barang[0])
        harga.append(barang[1])
        kode_product[barang[0]] = barang[1]

    # print(nama_barang)
    # print(harga)
    print(kode_product)

    barangPesanan = [item for item, count in collections.Counter(nama_barang).items() if count > 0]
    
    harga_bersih = sum(harga)
    diskon_harga = harga_bersih  * (diskon / 100)
    totalHarga = harga_bersih - diskon_harga
    
    # print(harga_bersih)
    # print(diskon_harga)
    # print(totalHarga)
    print(barangPesanan)
    # print(HargaPesanan)

    print("Item Yang dibeli")
    print("================================")
    for item in barangPesanan:
        print(item,"|",nama_barang.count(item),"|",kode_product[item])
    print("================================")
    print("sub Total :", harga_bersih)
    print("Diskon :", diskon_harga)
    print("================================")
    print("Total :", totalHarga)



checkout(["KD0023","KD0023","HI2020"],10)