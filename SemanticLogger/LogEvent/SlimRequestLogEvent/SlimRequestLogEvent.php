<?php

namespace SemanticLogger\LogEvent;

use Slim\Http\Request;

abstract class SlimRequestLogEvent extends AbstractLogEvent{

    /**
     * @log
     */
    protected $cookies;

    /**
     * @log
     */
    protected $headers;

    /**
     * @log
     */
    protected $body;

    /**
     * @log
     */
    protected $contentCharset;

    /**
     * @log
     */
    protected $contentLength;

    /**
     * @log
     */
    protected $contentType;

    /**
     * @log
     */
    protected $host;

    /**
     * @log
     */
    protected $hostWithPort;

    /**
     * @log
     */
    protected $Ip;

    /**
     * @log
     */
    protected $mediaType;

    /**
     * @log
     */
    protected $mediaTypeParams;

    /**
     * @log
     */
    protected $method;

    /**
     * @log
     */
    protected $path;

    /**
     * @log
     */
    protected $pathInfo;

    /**
     * @log
     */
    protected $port;

    /**
     * @log
     */
    protected $referer;

    /**
     * @log
     */
    protected $referrer;

    /**
     * @log
     */
    protected $resourceUri;

    /**
     * @log
     */
    protected $Url;

    /**
     * @log
     */
    protected $userAgent;

    /**
     * @log
     */
    protected $rootUri;

    /**
     * @log
     */
    protected $scheme;

    /**
     * @log
     */
    protected $scriptName;

    /**
     * @log
     */
    protected $isDelete;

    /**
     * @log
     */
    protected $isGet;

    /**
     * @log
     */
    protected $isHead;

    /**
     * @log
     */
    protected $isOptions;

    /**
     * @log
     */
    protected $isPatch;

    /**
     * @log
     */
    protected $isPut;

    /**
     * @log
     */
    protected $isPost;

    /**
     * @log
     */
    protected $isXhr;

    /**
     * @log
     */
    protected $get;

    /**
     * @log
     */
    protected $post;

    /**
     * @log
     */
    protected $patch;

    /**
     * @log
     */
    protected $put;

    /**
     * @log
     */
    protected $delete;

    /**
     * @log
     */
    protected $options;

    public function slimRequest(Request $request){
        $this->cookies = $request->cookies;
        $this->headers = $request->headers;
        
        $this->body = $request->getBody();
        $this->contentCharset = $request->getContentCharset();
        $this->contentLength = $request->getContentLength();
        $this->contentType = $request->getContentType();
        $this->host = $request->getHost();
        $this->hostWithPort = $request->getHostWithPort();
        $this->Ip = $request->getIp();
        $this->mediaType = $request->getMediaType();
        $this->mediaTypeParams = $request->getMediaTypeParams();
        $this->method = $request->getMethod();
        $this->path = $request->getPath();
        $this->pathInfo = $request->getPathInfo();
        $this->port = $request->getPort();
        $this->referer = $request->getReferer();
        $this->referrer = $request->getReferrer();
        $this->resourceUri = $request->getResourceUri();
        $this->Url = $request->getUrl();
        $this->userAgent = $request->getUserAgent();
        $this->rootUri = $request->getRootUri();
        $this->scheme = $request->getScheme();
        $this->scriptName = $request->getScriptName();
        $this->isDelete = $request->isDelete();
        $this->isGet = $request->isGet();
        $this->isHead = $request->isHead();
        $this->isOptions = $request->isOptions();
        $this->isPatch = $request->isPatch();
        $this->isPut = $request->isPut();
        $this->isPost = $request->isPost();
        $this->isXhr = $request->isXhr();
        $this->get = $request->get();
        $this->post = $request->post();
        $this->patch = $request->patch();
        $this->put = $request->put();
        $this->delete = $request->delete();
        $this->options = $request->params();
    }

}