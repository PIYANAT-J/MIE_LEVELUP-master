const log = console.log;
const chartPor = {
    // width:100,
    // height:500,
    timeScale:{
        timeVisible:true,
        secondsVisible:false,
    }
}

const doElement = document.getElementById('myChart');
const chart = LightweightCharts.createChart(doElement);
const candleSeries = chart.addCandlestickSeries();

fetch('https://api.binance.com/api/v3/klines?symbol=BTCUSDT&interval=1m&limit=1000')
.then(res => res.json())
.then(data => {
    const cdata = data.map(d=>{
    return {time:d[0]/1000,open:parseFloat(d[1]),high:parseFloat(d[2]),low:parseFloat(d[3]),close:parseFloat(d[4])}
    
    });
    candleSeries.setData(cdata);
})
.catch(err => log(err));

// const soket = io.connect('https://127.0.0.1:8000/');
// soket.on('KLINE', (pl) =>{
//     log(pl);
// 	// candleSeries.update(pl);
// });

// var lastClose = cdata[cdata.length - 1].close;
// var lastIndex = cdata.length - 1;

// var targetIndex = lastIndex + 105 + Math.round(Math.random() + 30);
// var targetPrice = getRandomPrice();

// var currentIndex = lastIndex + 1;
// var currentBusinessDay = { day: 29, month: 5, year: 2019 };
// var ticksInCurrentBar = 0;
// var currentBar = {
// 	open: null,
// 	high: null,
// 	low: null,
// 	close: null,
// 	time: currentBusinessDay,
// };

// function mergeTickToBar(price) {
// 	if (currentBar.open === null) {
// 		currentBar.open = price;
// 		currentBar.high = price;
// 		currentBar.low = price;
// 		currentBar.close = price;
// 	} else {
// 		currentBar.close = price;
// 		currentBar.high = Math.max(currentBar.high, price);
// 		currentBar.low = Math.min(currentBar.low, price);
// 	}
// 	candleSeries.update(currentBar);
// }

// function reset() {
// 	candleSeries.setData(cdata);
// 	lastClose = cdata[cdata.length - 1].close;
// 	lastIndex = cdata.length - 1;

// 	targetIndex = lastIndex + 5 + Math.round(Math.random() + 30);
// 	targetPrice = getRandomPrice();

// 	currentIndex = lastIndex + 1;
// 	currentBusinessDay = { day: 29, month: 5, year: 2019 };
// 	ticksInCurrentBar = 0;
// }

// function getRandomPrice() {
// 	return 10 + Math.round(Math.random() * 10000) / 100;
// }

// function nextBusinessDay(time) {
// 	var d = new Date();
// 	d.setUTCFullYear(time.year);
// 	d.setUTCMonth(time.month - 1);
// 	d.setUTCDate(time.day + 1);
// 	d.setUTCHours(0, 0, 0, 0);
// 	return {
// 		year: d.getUTCFullYear(),
// 		month: d.getUTCMonth() + 1,
// 		day: d.getUTCDate(),
// 	};
// }

// setInterval(function() {
// 	var deltaY = targetPrice - lastClose;
// 	var deltaX = targetIndex - lastIndex;
// 	var angle = deltaY / deltaX;
// 	var basePrice = lastClose + (currentIndex - lastIndex) * angle;
// 	var noise = (0.1 - Math.random() * 0.2) + 1.0;
// 	var noisedPrice = basePrice * noise;
// 	mergeTickToBar(noisedPrice);
// 	if (++ticksInCurrentBar === 5) {
// 		// move to next bar
// 		currentIndex++;
// 		currentBusinessDay = nextBusinessDay(currentBusinessDay);
// 		currentBar = {
// 			open: null,
// 			high: null,
// 			low: null,
// 			close: null,
// 			time: currentBusinessDay,
// 		};
// 		ticksInCurrentBar = 0;
// 		if (currentIndex === 5000) {
// 			reset();
// 			return;
// 		}
// 		if (currentIndex === targetIndex) {
// 			// change trend
// 			lastClose = noisedPrice;
// 			lastIndex = currentIndex;
// 			targetIndex = lastIndex + 5 + Math.round(Math.random() + 30);
// 			targetPrice = getRandomPrice();
// 		}
// 	}
// }, 200);