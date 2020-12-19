def cekNilai(number):
    nilai = number
    submited = len(nilai)
    lulus = []
    tidakLulus = []
    rata_rata = sum(nilai) / submited

    for nilai in nilai:
        if nilai >= 65:
            print(nilai,"=> Lulus")
            lulus.append(1)
        else:
            print(nilai,"=> Tidak Lulus")
            tidakLulus.append(1) 

    print("===============================")
    print("Jumlah Nilai Yang diusumbit :",submited)
    print("Rata rata nilai :",rata_rata)
    print("Lulus :",lulus.count(1))
    print("Tidak Lulus :",tidakLulus.count(1))


cekNilai([20,50,65,70,80,80,30,55,75])