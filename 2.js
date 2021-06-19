// soal 2
const soal2 = (data) => {
	// quicksort
	Array.prototype.quickSort = function() {
		if (this.length < 2) {
			return this;
		}

		// elemen pivot
		const pivot = this[Math.floor(this.length / 2)];

		return this.filter((x) => x < pivot)
			.quickSort()
			.concat(this.filter((x) => x === pivot))
			.concat(this.filter((x) => x > pivot).quickSort());
	};

	// flatten array
	const flatData = data.map((e) => (e instanceof Array ? e.join('') : e));

	// sort dan satukan array menjadi kalimat
	const sentence = flatData.quickSort().join(' ');

	console.log(sentence);
};

// main function
(() => {
	const data2 = [
		['Keren'],
		['D', 'W', 'B', 'T', 'A', 'S', 'U', 'D', 'M', 'O', 'Y', 'T', 'I', 'D'],
		['Sekali']
	];
	// ya gimana sort-nya? panjangnya juga beda
	data2[1] = ['D', 'U', 'M', 'B', 'W', 'A', 'Y', 'S', 'D', 'O', 'T', 'I', 'D'];
	soal2(data2);

})();
