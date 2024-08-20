import http from 'k6/http';
import { sleep } from 'k6'; // List of web pages to test
import { check } from "k6";

const webPages = [     
    "https://local.iccsafe.org/about/who-we-are/",
    "https://local.iccsafe.org/about/leadership/",
    "https://local.iccsafe.org/about/sponsors/",
    "https://local.iccsafe.org/icc-bylaws-and-council-policies/",
    "https://local.iccsafe.org/about/news-and-events/code-council-awards/",
    "https://local.iccsafe.org/about/careers-at-icc/"
]; 

// export const options = {
//     // define thresholds
//     thresholds: {
//         http_req_failed: ['rate<0.01'], // http errors should be less than 1%
//         http_req_duration: ["p(99)<1000"], // 99% of requests should be below 1s
//     },
// };

export default function () {
    // Iterate over each web page
    for (let i = 0; i < webPages.length; i++) {

        const res = http.get(webPages[i]);
        //console.log(`Response status for ${webPages[i]}: ${res.status}`);
        // Log the request body
        console.log(res.body);

        // check that response is 200
        check(res, {
            "response code was 200": (res) => res.status == 200,
        });
        sleep(0.3);
    }
}