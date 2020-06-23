import { test } from '../qunit';
import { localeModule } from '../qunit-locale';
import moment from '../../moment';
localeModule('tk');

test('parse', function (assert) {
    var tests = 'Ýanwar Ýan_Fewral Few_Mart Mar_Aprel Apr_Maý Maý_Iýun Iýn_Iýul Iýl_Awgust Awg_Sentýabr Sen_Oktýabr Okt_Noýabr Noý_Dekabr Dek'.split(
            '_'
        ),
        i;
    function equalTest(input, mmm, i) {
        assert.equal(
            moment(input, mmm).month(),
            i,
            input + ' should be month ' + (i + 1)
        );
    }

    function equalTestStrict(input, mmm, monthIndex) {
        assert.equal(
            moment(input, mmm, true).month(),
            monthIndex,
            input + ' ' + mmm + ' should be strict month ' + (monthIndex + 1)
        );
    }

    for (i = 0; i < 12; i++) {
        tests[i] = tests[i].split(' ');
        equalTest(tests[i][0], 'MMM', i);
        equalTest(tests[i][1], 'MMM', i);
        equalTest(tests[i][0], 'MMMM', i);
        equalTest(tests[i][1], 'MMMM', i);
        equalTest(tests[i][0].toLocaleLowerCase(), 'MMMM', i);
        equalTest(tests[i][1].toLocaleLowerCase(), 'MMMM', i);
        equalTest(tests[i][0].toLocaleUpperCase(), 'MMMM', i);
        equalTest(tests[i][1].toLocaleUpperCase(), 'MMMM', i);

        equalTestStrict(tests[i][1], 'MMM', i);
        equalTestStrict(tests[i][0], 'MMMM', i);
        equalTestStrict(tests[i][1].toLocaleLowerCase(), 'MMM', i);
        equalTestStrict(tests[i][1].toLocaleUpperCase(), 'MMM', i);
        equalTestStrict(tests[i][0].toLocaleLowerCase(), 'MMMM', i);
        equalTestStrict(tests[i][0].toLocaleUpperCase(), 'MMMM', i);
    }
});

test('format', function (assert) {
    var a = [
            [
                'dddd, MMMM Do YYYY, h:mm:ss a',
                'Ýekşenbe, Fewral 14 2010, 3:25:50 pm',
            ],
            ['ddd, hA', 'Ýek, 3PM'],
            ['M Mo MM MMMM MMM', "2 2'nji 02 Fewral Few"],
            ['YYYY YY', '2010 10'],
            ['D Do DD', '14 14 14'],
            ['d do dddd ddd dd', '0 0 Ýekşenbe Ýek Ýk'],
            ['DDD DDDo DDDD', "45 45'inji 045"],
            ['w wo ww', "7 7'nji 07"],
            ['h hh', '3 03'],
            ['H HH', '15 15'],
            ['m mm', '25 25'],
            ['s ss', '50 50'],
            ['a A', 'pm PM'],
            ['[ýylynyň] DDDo [güni]', "ýylynyň 45'inji güni"],
            ['LTS', '15:25:50'],
            ['L', '14.02.2010'],
            ['LL', '14 Fewral 2010'],
            ['LLL', '14 Fewral 2010 15:25'],
            ['LLLL', 'Ýekşenbe, 14 Fewral 2010 15:25'],
            ['l', '14.2.2010'],
            ['ll', '14 Few 2010'],
            ['lll', '14 Few 2010 15:25'],
            ['llll', 'Ýek, 14 Few 2010 15:25'],
        ],
        b = moment(new Date(2010, 1, 14, 15, 25, 50, 125)),
        i;
    for (i = 0; i < a.length; i++) {
        assert.equal(b.format(a[i][0]), a[i][1], a[i][0] + ' ---> ' + a[i][1]);
    }
});

test('format ordinal', function (assert) {
    assert.equal(moment([2011, 0, 1]).format('DDDo'), "1'inji", '1st');
    assert.equal(moment([2011, 0, 2]).format('DDDo'), "2'nji", '2nd');
    assert.equal(moment([2011, 0, 3]).format('DDDo'), "3'ünji", '3rd');
    assert.equal(moment([2011, 0, 4]).format('DDDo'), "4'ünji", '4th');
    assert.equal(moment([2011, 0, 5]).format('DDDo'), "5'inji", '5th');
    assert.equal(moment([2011, 0, 6]).format('DDDo'), "6'njy", '6th');
    assert.equal(moment([2011, 0, 7]).format('DDDo'), "7'nji", '7th');
    assert.equal(moment([2011, 0, 8]).format('DDDo'), "8'inji", '8th');
    assert.equal(moment([2011, 0, 9]).format('DDDo'), "9'unjy", '9th');
    assert.equal(moment([2011, 0, 10]).format('DDDo'), "10'unjy", '10th');

    assert.equal(moment([2011, 0, 11]).format('DDDo'), "11'inji", '11th');
    assert.equal(moment([2011, 0, 12]).format('DDDo'), "12'nji", '12th');
    assert.equal(moment([2011, 0, 13]).format('DDDo'), "13'ünji", '13th');
    assert.equal(moment([2011, 0, 14]).format('DDDo'), "14'ünji", '14th');
    assert.equal(moment([2011, 0, 15]).format('DDDo'), "15'inji", '15th');
    assert.equal(moment([2011, 0, 16]).format('DDDo'), "16'njy", '16th');
    assert.equal(moment([2011, 0, 17]).format('DDDo'), "17'nji", '17th');
    assert.equal(moment([2011, 0, 18]).format('DDDo'), "18'inji", '18th');
    assert.equal(moment([2011, 0, 19]).format('DDDo'), "19'unjy", '19th');
    assert.equal(moment([2011, 0, 20]).format('DDDo'), "20'nji", '20th');

    assert.equal(moment([2011, 0, 21]).format('DDDo'), "21'inji", '21th');
    assert.equal(moment([2011, 0, 22]).format('DDDo'), "22'nji", '22th');
    assert.equal(moment([2011, 0, 23]).format('DDDo'), "23'ünji", '23th');
    assert.equal(moment([2011, 0, 24]).format('DDDo'), "24'ünji", '24th');
    assert.equal(moment([2011, 0, 25]).format('DDDo'), "25'inji", '25th');
    assert.equal(moment([2011, 0, 26]).format('DDDo'), "26'njy", '26th');
    assert.equal(moment([2011, 0, 27]).format('DDDo'), "27'nji", '27th');
    assert.equal(moment([2011, 0, 28]).format('DDDo'), "28'inji", '28th');
    assert.equal(moment([2011, 0, 29]).format('DDDo'), "29'unjy", '29th');
    assert.equal(moment([2011, 0, 30]).format('DDDo'), "30'unjy", '30th');

    assert.equal(moment([2011, 0, 31]).format('DDDo'), "31'inji", '31st');
});

test('format month', function (assert) {
    var expected = 'Ýanwar Ýan_Fewral Few_Mart Mar_Aprel Apr_Maý Maý_Iýun Iýn_Iýul Iýl_Awgust Awg_Sentýabr Sen_Oktýabr Okt_Noýabr Noý_Dekabr Dek'.split(
            '_'
        ),
        i;
    for (i = 0; i < expected.length; i++) {
        assert.equal(
            moment([2011, i, 1]).format('MMMM MMM'),
            expected[i],
            expected[i]
        );
    }
});

test('format week', function (assert) {
    var expected = 'Ýekşenbe Ýek Ýk_Duşenbe Duş Dş_Sişenbe Siş Sş_Çarşenbe Çar Çr_Penşenbe Pen Pn_Anna Ann An_Şenbe Şen Şn'.split(
            '_'
        ),
        i;
    for (i = 0; i < expected.length; i++) {
        assert.equal(
            moment([2011, 0, 2 + i]).format('dddd ddd dd'),
            expected[i],
            expected[i]
        );
    }
});

test('from', function (assert) {
    var start = moment([2007, 1, 28]);
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ s: 44 }), true),
        'birnäçe sekunt',
        '44 seconds = a few seconds'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ s: 45 }), true),
        'bir minut',
        '45 seconds = a minute'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ s: 89 }), true),
        'bir minut',
        '89 seconds = a minute'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ s: 90 }), true),
        '2 minut',
        '90 seconds = 2 minutes'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ m: 44 }), true),
        '44 minut',
        '44 minutes = 44 minutes'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ m: 45 }), true),
        'bir sagat',
        '45 minutes = an hour'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ m: 89 }), true),
        'bir sagat',
        '89 minutes = an hour'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ m: 90 }), true),
        '2 sagat',
        '90 minutes = 2 hours'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ h: 5 }), true),
        '5 sagat',
        '5 hours = 5 hours'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ h: 21 }), true),
        '21 sagat',
        '21 hours = 21 hours'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ h: 22 }), true),
        'bir gün',
        '22 hours = a day'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ h: 35 }), true),
        'bir gün',
        '35 hours = a day'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ h: 36 }), true),
        '2 gün',
        '36 hours = 2 days'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ d: 1 }), true),
        'bir gün',
        '1 day = a day'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ d: 5 }), true),
        '5 gün',
        '5 days = 5 days'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ d: 25 }), true),
        '25 gün',
        '25 days = 25 days'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ d: 26 }), true),
        'bir aý',
        '26 days = a month'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ d: 30 }), true),
        'bir aý',
        '30 days = a month'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ d: 43 }), true),
        'bir aý',
        '43 days = a month'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ d: 46 }), true),
        '2 aý',
        '46 days = 2 months'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ d: 74 }), true),
        '2 aý',
        '75 days = 2 months'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ d: 76 }), true),
        '3 aý',
        '76 days = 3 months'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ M: 1 }), true),
        'bir aý',
        '1 month = a month'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ M: 5 }), true),
        '5 aý',
        '5 months = 5 months'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ d: 345 }), true),
        'bir ýyl',
        '345 days = a year'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ d: 548 }), true),
        '2 ýyl',
        '548 days = 2 years'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ y: 1 }), true),
        'bir ýyl',
        '1 year = a year'
    );
    assert.equal(
        start.from(moment([2007, 1, 28]).add({ y: 5 }), true),
        '5 ýyl',
        '5 years = 5 years'
    );
});

test('suffix', function (assert) {
    assert.equal(moment(30000).from(0), 'birnäçe sekunt soň', 'prefix');
    assert.equal(moment(0).from(30000), 'birnäçe sekunt öň', 'suffix');
});

test('now from now', function (assert) {
    assert.equal(
        moment().fromNow(),
        'birnäçe sekunt öň',
        'now from now should display as in the past'
    );
});

test('fromNow', function (assert) {
    assert.equal(
        moment().add({ s: 30 }).fromNow(),
        'birnäçe sekunt soň',
        'in a few seconds'
    );
    assert.equal(moment().add({ d: 5 }).fromNow(), '5 gün soň', 'in 5 days');
});

test('calendar day', function (assert) {
    var a = moment().hours(12).minutes(0).seconds(0);

    assert.equal(
        moment(a).calendar(),
        'bugün sagat 12:00',
        'today at the same time'
    );
    assert.equal(
        moment(a).add({ m: 25 }).calendar(),
        'bugün sagat 12:25',
        'Now plus 25 min'
    );
    assert.equal(
        moment(a).add({ h: 1 }).calendar(),
        'bugün sagat 13:00',
        'Now plus 1 hour'
    );
    assert.equal(
        moment(a).add({ d: 1 }).calendar(),
        'ertir sagat 12:00',
        'tomorrow at the same time'
    );
    assert.equal(
        moment(a).subtract({ h: 1 }).calendar(),
        'bugün sagat 11:00',
        'Now minus 1 hour'
    );
    assert.equal(
        moment(a).subtract({ d: 1 }).calendar(),
        'düýn 12:00',
        'yesterday at the same time'
    );
});

test('calendar next week', function (assert) {
    var i, m;
    for (i = 2; i < 7; i++) {
        m = moment().add({ d: i });
        assert.equal(
            m.calendar(),
            m.format('[indiki] dddd [sagat] LT'),
            'Today + ' + i + ' days current time'
        );
        m.hours(0).minutes(0).seconds(0).milliseconds(0);
        assert.equal(
            m.calendar(),
            m.format('[indiki] dddd [sagat] LT'),
            'Today + ' + i + ' days beginning of day'
        );
        m.hours(23).minutes(59).seconds(59).milliseconds(999);
        assert.equal(
            m.calendar(),
            m.format('[indiki] dddd [sagat] LT'),
            'Today + ' + i + ' days end of day'
        );
    }
});

test('calendar last week', function (assert) {
    var i, m;
    for (i = 2; i < 7; i++) {
        m = moment().subtract({ d: i });
        assert.equal(
            m.calendar(),
            m.format('[geçen] dddd [sagat] LT'),
            'Today - ' + i + ' days current time'
        );
        m.hours(0).minutes(0).seconds(0).milliseconds(0);
        assert.equal(
            m.calendar(),
            m.format('[geçen] dddd [sagat] LT'),
            'Today - ' + i + ' days beginning of day'
        );
        m.hours(23).minutes(59).seconds(59).milliseconds(999);
        assert.equal(
            m.calendar(),
            m.format('[geçen] dddd [sagat] LT'),
            'Today - ' + i + ' days end of day'
        );
    }
});

test('calendar all else', function (assert) {
    var weeksAgo = moment().subtract({ w: 1 }),
        weeksFromNow = moment().add({ w: 1 });

    assert.equal(weeksAgo.calendar(), weeksAgo.format('L'), '1 week ago');
    assert.equal(
        weeksFromNow.calendar(),
        weeksFromNow.format('L'),
        'in 1 week'
    );

    weeksAgo = moment().subtract({ w: 2 });
    weeksFromNow = moment().add({ w: 2 });

    assert.equal(weeksAgo.calendar(), weeksAgo.format('L'), '2 weeks ago');
    assert.equal(
        weeksFromNow.calendar(),
        weeksFromNow.format('L'),
        'in 2 weeks'
    );
});

test('weeks year starting sunday formatted', function (assert) {
    assert.equal(
        moment([2012, 0, 1]).format('w ww wo'),
        "1 01 1'inji",
        'Jan  1 2012 should be week 1'
    );
    assert.equal(
        moment([2012, 0, 2]).format('w ww wo'),
        "2 02 2'nji",
        'Jan  2 2012 should be week 2'
    );
    assert.equal(
        moment([2012, 0, 8]).format('w ww wo'),
        "2 02 2'nji",
        'Jan  8 2012 should be week 2'
    );
    assert.equal(
        moment([2012, 0, 9]).format('w ww wo'),
        "3 03 3'ünji",
        'Jan  9 2012 should be week 3'
    );
    assert.equal(
        moment([2012, 0, 15]).format('w ww wo'),
        "3 03 3'ünji",
        'Jan 15 2012 should be week 3'
    );
});
