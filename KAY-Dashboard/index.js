// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import { getFirestore, collection } from "firebase/firestore"
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCDH0yTN2BaYsqn8z_Yaq87FJL-ECx8JVw",
  authDomain: "kay1-d234f.firebaseapp.com",
  projectId: "kay1-d234f",
  storageBucket: "kay1-d234f.appspot.com",
  messagingSenderId: "147534891023",
  appId: "1:147534891023:web:7a3a17032c6041e0af3b7a",
  measurementId: "G-K286HZ6H2L"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

//init services 

const db = getFirestore();