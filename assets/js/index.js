//値をグラフに表示させる
Chart.plugins.register({
  afterDatasetsDraw: function (chart, easing) {
    var ctx = chart.ctx;

    chart.data.datasets.forEach(function (dataset, i) {
      var meta = chart.getDatasetMeta(i);
      if (!meta.hidden) {
        meta.data.forEach(function (element, index) {
          // 値の表示
          ctx.fillStyle = 'rgb(0, 0, 0,0)'; //文字の色
          var fontSize = 15; //フォントサイズ
          var fontWight = 500;
          var fontStyle = 'normal'; //フォントスタイル
          var fontFamily = 'Noto Sans JP'; //フォントファミリー
          ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

          var dataString = dataset.data[index].toString();

          // 値の位置
          ctx.textAlign = 'center'; //テキストを中央寄せ
          ctx.textBaseline = 'middle'; //テキストベースラインの位置を中央揃え

          var padding = 0; //余白
          var position = element.tooltipPosition();
          ctx.fillText(
            dataString,
            position.x,
            position.y - fontSize / 2 - padding
          );
        });
      }
    });
  },
});

function countUp(start, stop, duration, easing, element) {
  $({ percent: start }).animate(
    { percent: stop },
    {
      duration: duration,
      easing: easing,
      progress: function () {
        element.text(Math.round(this.percent));
      },
    }
  );
}

//=========== 折れ線グラフ（1本） ============//
$('#chart01').on('inview', function (event, isInView) {
  //画面上に入ったらグラフを描画
  if (isInView) {
    var ctx = document.getElementById('chart01'); //グラフを描画したい場所のid
    var chart = new Chart(ctx, {
      type: 'line', //グラフのタイプ
      data: {
        //グラフのデータ
        labels: ['2017年', '2018年', '2019年', '2020年', '2021年'], //データの名前
        datasets: [
          {
            label: '導入台数', //グラフのタイトル
            borderColor: 'rgba(255,0,0,1)', //グラフの線の色
            backgroundColor: 'rgba(255,0,0,0.1)', //グラフの背景色
            data: ['600', '4600', '12600', '25600', '35600'], //横列に並ぶデータ
            pointRadius: 1,
          },
        ],
      },
      options: {
        //グラフのオプション
        legend: {
          display: false, //グラフの説明を非表示
        },
        tooltips: {
          //グラフへカーソルを合わせた際の詳細表示の設定
          callbacks: {
            label: function (tooltipItems, data) {
              if (tooltipItems.yLabel == '0') {
                return '';
              }
              return (
                data.datasets[tooltipItems.datasetIndex].label +
                '：' +
                tooltipItems.yLabel +
                '件'
              ); //Kgを最後につける
            },
          },
        },
        title: {
          //上部タイトル表示の設定
          display: false,
          fontSize: 10,
          text: '単位：Kg',
        },
        scales: {
          yAxes: [
            //グラフ縦軸（Y軸）設定
            {
              ticks: {
                beginAtZero: true, //0からスタート
                suggestedMax: 40000, //最大が1000
                suggestedMin: 0, //最小が0
                stepSize: 10000, //10づつ数値が刻まれる
                callback: function (value) {
                  return value; //数字＋Kgで表示
                },
              },
            },
          ],
          xAxes: [
            //棒グラフ縦軸（X軸）設定
            {
              barPercentage: 0.5, //バーの太さ
            },
          ],
        },
        maintainAspectRatio: false,
      },
    });
    let $count = $('#numCount');
    countUp(0, 35000, 1000, 'easeOutQuart', $count);
  }
});

$(document).ready(function () {
  $('#slider').slick({
    dots: false,
    infinite: true,
    arrows: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1164,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        },
      },
    ],
  });
});
