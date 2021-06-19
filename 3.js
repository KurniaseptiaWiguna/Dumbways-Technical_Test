const cetakGambar = (panjang, lebar) => {
	// jika nilai lebar tidak diberikan, gunakan nilai panjang sebagai lebar
	if (!lebar) {
		lebar = panjang;
	}

	// fungsi cek bilangan genap yang simple
	const isEven = (i) => i % 2 === 0;

	// error jika panjang atau lebar tidak genap
	if (!isEven(panjang) || !isEven(lebar)) {
		throw new Error('panjang atau lebar tidak genap');
	}

	const c1 = '+';
	const c2 = '=';

	for (let row = 0; row < panjang; ++row) {
		// pattern yang akan di-print di row ini
		let rowStr = '';
		for (let col = 0; col < lebar; ++col) {
			// kalau di baris paling atas atau baris paling bawah atau kolom kelipatan 3,
			// gunakan karakter c1, selain itu c2
			const char =
				row === 0 || row === lebar - 1 || (col + 1) % 3 === 0 ? c1 : c2;

			// tambahkan karakter ke pattern ditambah dengan spasi
			rowStr += char + ' ';
		}
		// print pattern untuk row ini
		console.log(rowStr + '\n');
	}
};

// main function
(() => {
	const panjang = 8;
	cetakGambar(panjang);
})();