const firebaseConfig = {
    apiKey: "AIzaSyBFpMJJJkQ_WNYKVpFjEGRBu7IHb6y-a_c",
    authDomain: "laravel-phone-otp-auth-e8a5e.firebaseapp.com",
    projectId: "laravel-phone-otp-auth-e8a5e",
    storageBucket: "laravel-phone-otp-auth-e8a5e.appspot.com",
    messagingSenderId: "200983038722",
    appId: "1:200983038722:web:b647e6a3cccdacd266101b",
    measurementId: "G-825PZE7QD8"
  };

  

  // Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBFpMJJJkQ_WNYKVpFjEGRBu7IHb6y-a_c",
  authDomain: "laravel-phone-otp-auth-e8a5e.firebaseapp.com",
  projectId: "laravel-phone-otp-auth-e8a5e",
  storageBucket: "laravel-phone-otp-auth-e8a5e.appspot.com",
  messagingSenderId: "200983038722",
  appId: "1:200983038722:web:b647e6a3cccdacd266101b",
  measurementId: "G-825PZE7QD8"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);