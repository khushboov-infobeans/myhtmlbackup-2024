// import necessary modules
import { check } from "k6";
import http from "k6/http";
import { sleep } from 'k6'; // List of web pages to test

const webPages = [     
    "https://www.iccsafe.org/about/who-we-are/",
    "https://www.iccsafe.org/about/leadership/",
    "https://www.iccsafe.org/about/sponsors/",
    "https://www.iccsafe.org/icc-bylaws-and-council-policies/",
    "https://www.iccsafe.org/about/news-and-events/code-council-awards/",
    "https://www.iccsafe.org/about/careers-at-icc/"
]; 

export const options = {
    // iterations: 1000,
    stages: [
      { duration: '1m', target: 20 },
      { duration: '3m', target: 20 },
      { duration: '1m', target: 0 },
    ],
    thresholds: {
      http_req_failed: ['rate<0.02'], // http errors should be less than 2%
      http_req_duration: ['p(95)<2000'], // 95% requests should be below 2s
    },
    ext: {
      loadimpact: {
        distribution: {
          'amazon:us:ashburn': { loadZone: 'amazon:us:ashburn', percent: 100 },
        },
      },
    },
  }

export default function () {
    for (let i = 0; i < webPages.length; i++) {
        let response = http.get(webPages[i]);

        //const textres = JSON.stringify(response, null, 4);
        console.log('******************************************************************');
        console.log('URL : ' + webPages[i]);
        console.log(response.status);
        console.log(response.status_text);
        console.log(response.timings);
        console.log(response.error);
        console.log(response.error_code);
        console.log('******************************************************************');

        //console.log(response.body);
        check(response, {
            "response code was 200": (response) => response.status == 200,
        });
        
        sleep(0.3);
    }
}
