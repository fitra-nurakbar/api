import React, { useState, useEffect } from "react";
import { Head } from "@inertiajs/inertia-react";

export default function Test(props) {
     const [text, setText] = useState("");
     const [showText, setShowText] = useState(false);

     useEffect(() => {
          text == "Hello World!!!"  ? setShowText(true) : setShowText(false);
     }, [text]);

    return (
     <div className="flex flex-col justify-center items-center gap-y-5">
        <div className="mx-auto flex justify-center items-center text-2xl bg-sky-300 w-[200px] flex-wrap h-[200px] rounded-xl font-bold">
            <Head title={props.title} />
            {showText ? (
                 <h1>{text}</h1>
            ) : ""}
        </div>
        <input className="rounded-lg w-[200px]" type="text" placeholder="input here..." onChange={(typing) => setText(typing.target.value)} />
     </div>
    );
}
